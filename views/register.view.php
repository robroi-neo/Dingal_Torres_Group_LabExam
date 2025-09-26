<?php require('partials/header.php') ?>
<?php require "partials/nav.php" ?>

<div class="min-h-screen flex items-center justify-center p-6">
    <div class="absolute inset-0 bg-[url('/images/CCE_BG.png')] bg-cover bg-center opacity-5 -z-10"></div>
    <!-- Card -->
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8 mb-15">
        <div class="relative flex items-center mb-6">
            <!-- Arrow aligned left -->
            <img src="/images/back.svg"
                alt="Back"
                class="h-5 w-5 absolute left-0 cursor-pointer"
                onclick="window.location.href='/'">

            <!-- Title centered -->
            <h2 class="text-2xl font-semibold text-gray-800 mx-auto">
                Create An Account
            </h2>
        </div>


        <form action="/register" method="POST" class="space-y-4">
            <!-- Full name -->
            <div>
                <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
                <input id="full_name" name="full_name" type="text" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700" placeholder="Jane Doe">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                <input id="email" name="email" type="email" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700" placeholder="you@example.com">
            </div>

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input id="username" name="username" type="text" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700" placeholder="janedoe">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input id="password" name="password" type="password" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700" placeholder="••••••••">
            </div>

            <!-- Confirm password -->
            <div>
                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input id="confirm_password" name="confirm_password" type="password" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-700" placeholder="••••••••">
            </div>

            <!-- Submit -->
            <div>
                <button type="submit" class="w-full py-2 rounded-md bg-green-900 text-white font-semibold hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-700">Register</button>
            </div>

            <!-- Sign in link -->
            <p class="text-center text-sm text-gray-600">Already have an account? <a href="/login" class="text-green-700 underline">Sign in</a></p>
        </form>
    </div>
</div>

<?php
dd($_POST);
?>

<?php require('partials/footer.php') ?>