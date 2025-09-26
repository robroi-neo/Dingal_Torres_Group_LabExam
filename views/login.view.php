<?php require 'partials/header.php'; ?>
<?php require "partials/nav.php" ?>

<!-- Background layer -->
<div class="absolute inset-0 bg-[url('/images/CCE_BG.png')] bg-cover bg-center opacity-5 -z-10"></div>

<div class="min-h-screen flex items-center justify-center p-6 mb-10">

    <!-- Card -->
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
        <div class="relative flex items-center mb-6">
            <!-- Arrow aligned left -->
            <img src="/images/back.svg"
                alt="Back"
                class="h-5 w-5 absolute left-0 cursor-pointer"
                onclick="window.location.href='/'">

            <!-- Title centered -->
            <h2 class="text-2xl font-semibold text-gray-800 mx-auto">
                Sign in to your account
            </h2>
        </div>

        <form action="/login" method="POST" class="space-y-4">
            <!-- Email -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input id="username" name="username" type="name" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700" placeholder="username">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input id="password" name="password" type="password" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700" placeholder="••••••••">
            </div>

            <!-- Remember me -->
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center gap-2">
                    <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-green-900 rounded">
                    <label for="remember" class="text-gray-600">Remember me</label>
                </div>
                <a href="#" class="text-green-900 hover:underline">Forgot password?</a>
            </div>

            <!-- Submit -->
            <div>
                <button type="submit" class="w-full py-2 rounded-md bg-green-900 text-white font-semibold hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-700">Login</button>
            </div>

            <!-- Sign up link -->
            <p class="text-center text-sm text-gray-600">Don’t have an account? <a href="/register" class="text-green-900 underline">Register</a></p>
        </form>
    </div>
</div>

<?php
require 'partials/footer.php';
?>