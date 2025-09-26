<?php require('partials/header.php') ?>

<div class="min-h-screen flex items-center justify-center p-6">
    <!-- Card -->
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Create an account</h2>

        <form action="/register" method="POST" class="space-y-4">
            <!-- Full name -->
            <div>
                <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
                <input id="full_name" name="full_name" type="text" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400" placeholder="Jane Doe">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                <input id="email" name="email" type="email" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400" placeholder="you@example.com">
            </div>

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input id="username" name="username" type="text" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400" placeholder="janedoe">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input id="password" name="password" type="password" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400" placeholder="••••••••">
            </div>

            <!-- Confirm password -->
            <div>
                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input id="confirm_password" name="confirm_password" type="password" required
                    class="block w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400" placeholder="••••••••">
            </div>

            <!-- Terms -->
            <div class="flex items-center gap-2 text-sm">
                <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-indigo-600 rounded">
                <label for="terms" class="text-gray-600">I agree to the <a href="#" class="text-indigo-600 underline">terms and conditions</a></label>
            </div>

            <!-- Submit -->
            <div>
                <button type="submit" class="w-full py-2 rounded-md bg-indigo-600 text-white font-semibold hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-400">Register</button>
            </div>

            <!-- Sign in link -->
            <p class="text-center text-sm text-gray-600">Already have an account? <a href="/login" class="text-indigo-600 underline">Sign in</a></p>
        </form>
    </div>
</div>

</body>

</html>

<?php require('partials/footer.php') ?>