FROM php:8.3-cli

# Install dependencies and clean up in one layer
RUN apt-get update && \
    apt-get install -y git libzip-dev zip && \
    docker-php-ext-install zip && \
    rm -rf /var/lib/apt/lists/*

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /src

# Configure git for composer VCS repositories
# Convert SSH URLs to HTTPS to avoid authentication issues in Docker builds
RUN git config --global url."https://github.com/".insteadOf git@github.com: && \
    git config --global url."https://".insteadOf ssh:// && \
    git config --global --add safe.directory '*' && \
    git config --global advice.detachedHead false

# Copy dependency files first for better cache utilization
COPY composer.json ./

# Install PHP dependencies (including dev dependencies needed for admin UI)
# Using update since there's no composer.lock file
RUN composer update -o --prefer-dist --no-scripts --no-interaction

# Copy application code
COPY . .

# Run post-install scripts and set permissions
RUN composer dump-autoload -o && \
    chmod a+x builds/expose-server && \
    chmod 755 docker-entrypoint.sh

ENV port=8080
ENV domain=tunnel.jaspis.me
ENV username=username
ENV exposeConfigPath=/src/config/expose-server.php

ENTRYPOINT ["./docker-entrypoint.sh"]