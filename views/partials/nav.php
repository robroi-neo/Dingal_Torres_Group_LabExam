<!-- Navbar -->
<nav class="shadow-md sticky top-0 bg-white/80 z-10 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <img src="/images/CCE_LOGO.png" alt="UM CCE Logo" class="h-10 w-10 mr-2">
            <p class="text-yellow-500 text-xl font-extrabold">
                UM <span class="text-green-900">CCE</span>
            </p>
        </a>
        <div class="hidden md:flex space-x-6">
            <?php if ($_SERVER['REQUEST_URI'] == '/'): ?>
                <a href="#" class="hover:text-neutral-800">Home</a>
                <a href="#about-us" class="ml-4 hover:text-neutral-800">About</a>
                <a href="#recent-events" class="ml-4 hover:text-neutral-800">Recent Events</a>
                <a href="#contact-us" class="ml-4 hover:text-neutral-800">Contact</a>
            <?php endif; ?>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6">

            <?php if (isset($_SESSION['username'])): ?>
                <!-- If logged in -->
                <a href="/logout" class="hover:text-red-500">Logout</a>
            <?php else: ?>
                <!-- If not logged in -->
                <a href="/login" class="hover:text-neutral-800">Login</a>
                <a href="/register" class="hover:text-neutral-800">Register</a>
            <?php endif; ?>
        </div>

        <!-- Mobile Hamburger -->
        <button id="menu-btn" class="md:hidden flex flex-col space-y-1">
            <span class="block w-6 h-0.5 bg-neutral-800"></span>
            <span class="block w-6 h-0.5 bg-neutral-800"></span>
            <span class="block w-6 h-0.5 bg-neutral-800"></span>
        </button>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden flex-col space-y-4 px-6 pb-4">
        <?php if (isset($_SESSION['username'])): ?>
            <!-- If logged in -->
            <a href="/logout.php" class="hover:text-neutral-800">Logout</a>
        <?php else: ?>
            <!-- If not logged in -->
            <a href="/login" class="hover:text-neutral-800">Login</a>
            <a href="/register" class="hover:text-neutral-800">Register</a>
        <?php endif; ?>
    </div>

</nav>

<script>
    // Toggle mobile menu
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>