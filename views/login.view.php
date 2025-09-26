<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <!-- Tailwind Play CDN for quick prototyping -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center p-6">
        <!-- Card -->
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Sign in to your account</h2>

            <form action="/login" method="POST" class="space-y-4">
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                    <input id="email" name="email" type="email" required
                        class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400" placeholder="you@example.com">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input id="password" name="password" type="password" required
                        class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400" placeholder="••••••••">
                </div>

                <!-- Remember me -->
                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center gap-2">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 rounded">
                        <label for="remember" class="text-gray-600">Remember me</label>
                    </div>
                    <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
                </div>

                <!-- Submit -->
                <div>
                    <button type="submit" class="w-full py-2 rounded-md bg-indigo-600 text-white font-semibold hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400">Login</button>
                </div>

                <!-- Sign up link -->
                <p class="text-center text-sm text-gray-600">Don’t have an account? <a href="/register" class="text-indigo-600 underline">Register</a></p>
            </form>
        </div>
    </div>

</body>

</html>