<!DOCTYPE html>
<html lang="en">
<head>
    <title>404 - Tunnel Not Found | Expose</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#DE4E78',
                        gray: {
                            50: '#fafafa',
                            100: '#f4f4f5',
                            200: '#e4e4e7',
                            300: '#d4d4d8',
                            400: '#a1a1aa',
                            500: '#71717a',
                            600: '#52525b',
                            700: '#3f3f46',
                            800: '#27272a',
                            900: '#18181b',
                            950: '#09090b',
                        }
                    },
                }
            }
        }
    </script>
</head>
<body class="antialiased">
<div class="relative min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
    <div id="stats">
        <nav class="backdrop-blur-sm bg-white/70 dark:bg-gray-900/70 border-b border-gray-200/50 dark:border-gray-700/50">
            <div class="max-w-7xl mx-auto py-4 px-4 md:px-6 flex flex-col md:flex-row md:items-center justify-between">
                <div class="flex space-x-8 items-center text-base">
                    <a href="https://tunnel.jaspis.me" class="inline-flex items-center self-start border-0 group transition-transform duration-200 hover:scale-105">
                        <img src="https://beyondco.de/apps/icons/expose.png" alt="expose.dev" class="h-8 lg:h-10 transition-all duration-200 group-hover:drop-shadow-lg">
                        <div class="ml-4">
                            <p class="text-lg lg:text-3xl tracking-tight text-gray-900 font-bold dark:text-white">Expose</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500">by Beyond Code</p
                        </div>
                    </a>
                </div>
            </div>
        </nav>

        <!-- 404 Hero Section -->
        <div class="max-w-3xl mx-auto px-4 py-16 md:py-24">
            <div class="text-center space-y-6 animate-fade-in">
                <div class="relative inline-block">
                    <h1 class="text-8xl md:text-9xl font-black text-transparent bg-clip-text bg-gradient-to-br from-primary to-pink-600 dark:from-primary dark:to-pink-400 tracking-tight">
                        404
                    </h1>
                    <div class="absolute inset-0 blur-3xl opacity-20 bg-gradient-to-br from-primary to-pink-600"></div>
                </div>
                
                <div class="space-y-3 pt-4">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">
                        Tunnel Not Found
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto leading-relaxed">
                        The tunnel <span class="font-mono text-primary font-semibold px-2 py-1 bg-pink-50 dark:bg-pink-900/20 rounded">{{ $subdomain }}</span> was not found on this Expose server.
                    </p>
                </div>
            </div>
        </div>

        <!-- Info Cards Section -->
        <div class="max-w-4xl mx-auto px-4 pb-16">
            <!-- Main Info Card -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl dark:shadow-2xl border border-gray-200/50 dark:border-gray-700/50 overflow-hidden mb-8 transition-all duration-300 hover:shadow-2xl">
                <div class="p-8 md:p-12">
                    <div class="space-y-6 text-gray-700 dark:text-gray-300">
                        <p class="text-lg leading-relaxed">
                            Expose allows others to access web services on your local machine through
                            any firewall or VPN. Secure and without cumbersome network configuration.
                        </p>
                        <p class="text-xl font-bold text-gray-900 dark:text-white">
                            Simple, secure <span class="text-primary">and open source.</span>
                        </p>
                        <p class="text-base leading-relaxed">
                            The Expose platform at <a href="https://tunnel.jaspis.me" class="link-hover">tunnel.jaspis.me</a> is the managed Expose service and
                            gives you a hassle-free experience when sharing your local development environment. We take care of TLS/SSL certificates for
                            your tunnels, manage access of your team, and run a global network of Expose servers for fast connections.
                        </p>
                    </div>

                    <div class="flex justify-center mt-10">
                        <a class="group relative inline-flex items-center justify-center px-8 py-3 text-base font-semibold text-white transition-all duration-200 bg-gradient-to-r from-primary to-pink-600 rounded-xl hover:shadow-lg hover:shadow-primary/50 hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                           href="https://expose.dev">
                            <span>Learn mor From Expose</span>
                            <svg class="w-5 h-5 ml-2 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Help Cards Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg dark:shadow-xl border border-gray-200/50 dark:border-gray-700/50 p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary/10 to-pink-100 dark:from-primary/20 dark:to-pink-900/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1 space-y-3">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Are you the developer?
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                Check out the <a href="https://expose.dev/docs" class="link-hover font-medium">documentation</a> to find out more about this error and how to resolve it.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg dark:shadow-xl border border-gray-200/50 dark:border-gray-700/50 p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary/10 to-pink-100 dark:from-primary/20 dark:to-pink-900/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1 space-y-3">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Just visiting?
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                Wait a moment and try again. The developer might be working on the site right now.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fade-in 0.6s ease-out;
    }

    .link-hover {
        position: relative;
        color: rgb(222, 78, 120);
        text-decoration: none;
        border-bottom: 2px solid transparent;
        transition: all 0.2s ease;
        font-weight: 500;
    }

    .link-hover:hover {
        color: rgb(236, 92, 134);
        border-bottom-color: rgb(236, 92, 134);
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }
</style>
</body>
</html>

