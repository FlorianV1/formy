<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formy - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4859B5',
                        'primary-dark': '#3a4a9a',
                        'bg-dark': '#171717'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bg-dark text-white min-h-screen flex items-center justify-center">
<div class="w-full max-w-md">
    <div class="bg-white/5 backdrop-blur-xl border border-primary/30 rounded-2xl p-8 shadow-2xl">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-primary mb-2">Formy</h1>
            <h2 class="text-xl font-semibold">Login to your account</h2>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            @if ($errors->any())
                <div class="bg-red-500/20 border border-red-500/30 rounded-lg p-4">
                    <ul class="text-sm text-red-300">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <label for="email" class="block text-sm font-medium text-gray-200 mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                       class="w-full px-4 py-3 bg-white/5 border border-primary/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300"
                       placeholder="Enter your email">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-200 mb-2">Password</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-4 py-3 bg-white/5 border border-primary/30 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300"
                       placeholder="Enter your password">
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="rounded border-primary/30 bg-white/5 text-primary focus:ring-primary/20">
                    <span class="ml-2 text-sm text-gray-300">Remember me</span>
                </label>
            </div>

            <button type="submit" class="w-full py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-xl font-semibold hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 transform hover:-translate-y-0.5">
                Login to Formy
            </button>

            <div class="text-center">
                <p class="text-gray-400 text-sm">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-primary hover:text-blue-300 transition-colors duration-300">Sign up</a>
                </p>
                <p class="mt-2">
                    <a href="/welcome" class="text-primary hover:text-blue-300 text-sm transition-colors duration-300">← Back to Welcome</a>
                </p>
            </div>
        </form>
    </div>
</div>
</body>
</html>
