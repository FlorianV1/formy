<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formy - Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4859B5',
                        'primary-dark': '#3a4a9a',
                        'bg-dark': '#171717'
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'fade-in-up': 'fadeInUp 1s ease-out',
                        'shimmer': 'shimmer 2s linear infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        shimmer: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(100%)' }
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bg-dark text-white min-h-screen relative overflow-x-hidden">
<!-- Animated Background -->
<div class="fixed inset-0 opacity-20 pointer-events-none">
    <div class="absolute top-20 left-20 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-xl animate-float"></div>
    <div class="absolute top-40 right-20 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-xl animate-float animation-delay-2000"></div>
    <div class="absolute -bottom-32 left-1/2 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-xl animate-float animation-delay-4000"></div>
</div>

<!-- Header -->
<header class="flex flex-col md:flex-row justify-between items-center p-6 md:p-8 relative z-10">
    <div class="mb-4 md:mb-0">
        <h1 class="text-3xl md:text-4xl font-bold text-primary drop-shadow-lg">
            Formy
        </h1>
    </div>

    <nav class="flex flex-col md:flex-row gap-3 w-full md:w-auto">
        <button onclick="showLogin()" class="px-6 py-3 bg-transparent border-2 border-primary text-primary rounded-lg font-semibold hover:bg-primary hover:text-white transition-all duration-300 transform hover:-translate-y-0.5 relative overflow-hidden group">
            <span class="absolute inset-0 w-0 bg-primary transition-all duration-300 ease-out group-hover:w-full"></span>
            <span class="relative z-10">Login</span>
        </button>
        <button onclick="showSignup()" class="px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg font-semibold hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 transform hover:-translate-y-0.5 relative overflow-hidden group">
            <span class="absolute inset-0 bg-gradient-to-r from-primary-dark to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            <span class="relative z-10">Sign Up</span>
        </button>
    </nav>
</header>

<!-- Main Content -->
<main class="flex-1 flex items-center justify-center px-6 py-12">
    <div class="max-w-4xl mx-auto text-center">
        <!-- Welcome Section -->
        <div class="mb-12 animate-fade-in-up">
            <h2 class="text-4xl md:text-6xl font-extrabold mb-6 bg-gradient-to-r from-primary via-blue-400 to-primary bg-clip-text text-transparent">
                Welcome to Formy
            </h2>
            <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                Your ultimate solution for seamless printing and document management.
                Experience the future of digital workflows with our cutting-edge platform.
            </p>
        </div>

        <!-- Form Container -->
        <div class="max-w-md mx-auto">
            <div class="bg-white/5 backdrop-blur-xl border border-primary/30 rounded-2xl p-8 shadow-2xl relative overflow-hidden group">
                <!-- Shimmer Effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-in-out"></div>

                <!-- Form Tabs -->
                <div class="flex mb-8 bg-white/5 rounded-xl p-1">
                    <button id="login-tab" onclick="switchTab('login')" class="flex-1 py-3 px-4 rounded-lg font-semibold transition-all duration-300 tab-button">
                        Login
                    </button>
                    <button id="signup-tab" onclick="switchTab('signup')" class="flex-1 py-3 px-4 rounded-lg font-semibold transition-all duration-300 tab-button">
                        Sign Up
                    </button>
                </div>

                <!-- Login Form -->
                <form id="login-form" class="space-y-6">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-200 mb-2">Email</label>
                            <input type="email" required class="w-full px-4 py-3 bg-white/5 border border-primary/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" placeholder="Enter your email">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-200 mb-2">Password</label>
                            <input type="password" required class="w-full px-4 py-3 bg-white/5 border border-primary/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" placeholder="Enter your password">
                        </div>
                    </div>

                    <button type="submit" class="w-full py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl font-semibold hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 transform hover:-translate-y-0.5 relative overflow-hidden group">
                        <span class="absolute inset-0 bg-gradient-to-r from-primary-dark to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative z-10">Login to Formy</span>
                    </button>

                    <div class="text-center">
                        <a href="#" class="text-primary hover:text-blue-300 text-sm transition-colors duration-300">Forgot your password?</a>
                    </div>
                </form>

                <!-- Signup Form -->
                <form id="signup-form" class="space-y-6 hidden">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-200 mb-2">Full Name</label>
                            <input type="text" required class="w-full px-4 py-3 bg-white/5 border border-primary/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" placeholder="Enter your full name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-200 mb-2">Email</label>
                            <input type="email" required class="w-full px-4 py-3 bg-white/5 border border-primary/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" placeholder="Enter your email">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-200 mb-2">Password</label>
                            <input type="password" required class="w-full px-4 py-3 bg-white/5 border border-primary/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" placeholder="Create a password">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-200 mb-2">Confirm Password</label>
                            <input type="password" required class="w-full px-4 py-3 bg-white/5 border border-primary/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" placeholder="Confirm your password">
                        </div>
                    </div>

                    <button type="submit" class="w-full py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl font-semibold hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 transform hover:-translate-y-0.5 relative overflow-hidden group">
                        <span class="absolute inset-0 bg-gradient-to-r from-primary-dark to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative z-10">Create Account</span>
                    </button>

                    <div class="text-center text-sm text-gray-400">
                        By signing up, you agree to our
                        <a href="#" class="text-primary hover:text-blue-300 transition-colors duration-300">Terms of Service</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- Footer Credit -->
<div class="fixed bottom-5 right-5 text-gray-500 text-sm italic z-10">
    Made by <span class="text-primary font-semibold">Stanley</span> and <span class="text-primary font-semibold">Florian</span>
</div>

<script>
    // Tab switching functionality
    function switchTab(tab) {
        const loginTab = document.getElementById('login-tab');
        const signupTab = document.getElementById('signup-tab');
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');

        if (tab === 'login') {
            loginTab.classList.add('bg-primary', 'text-white', 'shadow-lg');
            loginTab.classList.remove('text-gray-300');
            signupTab.classList.remove('bg-primary', 'text-white', 'shadow-lg');
            signupTab.classList.add('text-gray-300');

            loginForm.classList.remove('hidden');
            signupForm.classList.add('hidden');
        } else {
            signupTab.classList.add('bg-primary', 'text-white', 'shadow-lg');
            signupTab.classList.remove('text-gray-300');
            loginTab.classList.remove('bg-primary', 'text-white', 'shadow-lg');
            loginTab.classList.add('text-gray-300');

            signupForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
        }
    }

    // Header button functions
    function showLogin() {
        switchTab('login');
    }

    function showSignup() {
        switchTab('signup');
    }

    // Initialize with login tab active
    switchTab('login');

    // Form submission handlers
    document.getElementById('login-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const button = this.querySelector('button[type="submit"]');
        button.innerHTML = '<span class="relative z-10">Logging in...</span>';
        button.classList.add('opacity-75', 'cursor-not-allowed');

        // Simulate login process
        setTimeout(() => {
            alert('Login functionality would be implemented here!');
            button.innerHTML = '<span class="relative z-10">Login to Formy</span>';
            button.classList.remove('opacity-75', 'cursor-not-allowed');
        }, 2000);
    });

    document.getElementById('signup-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const button = this.querySelector('button[type="submit"]');
        button.innerHTML = '<span class="relative z-10">Creating Account...</span>';
        button.classList.add('opacity-75', 'cursor-not-allowed');

        // Simulate signup process
        setTimeout(() => {
            alert('Signup functionality would be implemented here!');
            button.innerHTML = '<span class="relative z-10">Create Account</span>';
            button.classList.remove('opacity-75', 'cursor-not-allowed');
        }, 2000);
    });

    // Add some interactive effects
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('transform', 'scale-105');
        });

        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('transform', 'scale-105');
        });
    });
</script>

<style>
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    .animation-delay-4000 {
        animation-delay: 4s;
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    ::-webkit-scrollbar-track {
        background: #171717;
    }
    ::-webkit-scrollbar-thumb {
        background: #4859B5;
        border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: #3a4a9a;
    }
</style>
</body>
</html>
