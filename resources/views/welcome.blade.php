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

<!-- Main Content -->
<main class="flex-1 flex items-center justify-center px-6 py-12 min-h-screen">
    <div class="max-w-4xl mx-auto text-center">
        <!-- Welcome Section -->
        <div class="mb-16 animate-fade-in-up">
            <h1 class="text-6xl md:text-8xl font-extrabold mb-8 bg-gradient-to-r from-primary via-blue-400 to-primary bg-clip-text text-transparent drop-shadow-2xl">
                Formy
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                Your ultimate solution for seamless printing and document management.
                Experience the future of digital workflows with our cutting-edge platform.
            </p>
        </div>

        <!-- Action Buttons -->
        <div class="max-w-md mx-auto space-y-4">
            <a href="/login" class="block w-full py-4 px-8 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl font-bold text-lg hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 transform hover:-translate-y-1 relative overflow-hidden group text-center">
                <span class="absolute inset-0 bg-gradient-to-r from-primary-dark to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                <span class="relative z-10">Login to Formy</span>
            </a>

            <a href="/register" class="block w-full py-4 px-8 bg-transparent border-2 border-primary text-primary rounded-xl font-bold text-lg hover:bg-primary hover:text-white transition-all duration-300 transform hover:-translate-y-1 relative overflow-hidden group text-center">
                <span class="absolute inset-0 w-0 bg-primary transition-all duration-300 ease-out group-hover:w-full"></span>
                <span class="relative z-10">Create Account</span>
            </a>

            <p class="text-gray-400 text-sm mt-6">
                Join thousands of users who trust Formy for their document needs
            </p>
        </div>
    </div>
</main>

<!-- Footer Credit -->
<div class="fixed bottom-5 right-5 text-gray-500 text-sm italic z-10">
    Made by <span class="text-primary font-semibold">Stanley</span> and <span class="text-primary font-semibold">Florian</span>
</div>

<script>
    // Add event listeners when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        // Login button
        const loginBtn = document.getElementById('login-btn');
        if (loginBtn) {
            loginBtn.addEventListener('click', function() {
                window.location.href = '/login';
            });
        }

        // Register button
        const registerBtn = document.getElementById('register-btn');
        if (registerBtn) {
            registerBtn.addEventListener('click', function() {
                window.location.href = '/register';
            });
        }
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
