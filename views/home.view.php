<?php require "partials/header.php" ?>
<?php require "partials/nav.php" ?>

<!-- Hero section -->
<section class="relative text-neutral-800 h-screen flex flex-row items-center justify-center">
    <div class="flex flex-row items-center justify-center mb-20">
        <div class="max-w-4xl text-center px-6">
            <h1 class="text-amber-400 text-9xl font-extrabold mb-4">UM <span class="text-green-900">CCE</span></h1>
            <p class="text-neutral-800 text-lg md:text-xl mb-6 font-bold">THE UNOFFICIAL COLLEGE OF COMPUTING EDUCATION PAGE</p>
            <a href="#recent-events" class="inline-block bg-white text-neutral-800 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100 font-mono">
                What's Happening?
            </a>
        </div>
        <div class="">
            <img src="/images/CCE_LOGO.png" alt="UM CCE Logo" class="h-60 w-60 object-fill">
        </div>
    </div>
</section>


<!-- About Us -->
<section class="max-w-7xl mx-40 py-10 flex flex-col" id="about-us">
    <h1 class="text-3xl font-bold mb-8">About Us</h1>
    <div class="space-y-4 text-justify">
        <p>The College of Computing Education maintains its reputation as one of the best computer schools in the region through its PACUCOA Level IV accredited programs as well as being a certified Center of Development. The college is composed of highly qualified faculty members who are skilled and equipped with the updated skills in different fields of computer studies.</p>
        <p>The Computer Science and Information Technology program of the college is granted Center of Development (COD) status by CHED. It has forged collaborations with Apple, Google, Microsoft (Center of Training) and IBM.</p>
        <p>Furthermore, the Computer Science and Information Technology program of the college is also PICAB (Philippine Computer Society (PCS) Information and Computing Accreditation Board) accredited.</p>
    </div>
</section>

<!-- Recent Events -->
<section class=" max-w-7xl mx-40 py-10 flex flex-col font-mono" id="recent-events">
    <h1 class="text-3xl font-bold mb-8">Recent Events</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Event 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="/images/events/event1.jpg" alt="Event 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Volleyball Tryouts</h2>
                <p class="text-gray-600 text-sm mb-4">Time: 1pm - 3pm. <br>Location: FEA Covered Court</p>
                <a href="https://www.facebook.com/share/p/1H2DMsJLoD/" target="_blank" class="text-indigo-600 hover:underline text-sm">Read More</a>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="/images/events/event2.jpg" alt="Event 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Basketball Tryouts</h2>
                <p class="text-gray-600 text-sm mb-4">Time: 5pm - 9pm. <br>Location: FEA Covered Court</p>
                <a href="https://www.facebook.com/share/p/1H2DMsJLoD/" target="_blank" class="text-indigo-600 hover:underline text-sm">Read More</a>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="/images/events/event3.jpg" alt="Event 3" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Sepak Takraw Tryouts</h2>
                <p class="text-gray-600 text-sm mb-4">Time: 5pm - 9pm. <br>Location: FEA Covered Court</p>
                <a href="https://www.facebook.com/share/p/1H2DMsJLoD/" target="_blank" class="text-indigo-600 hover:underline text-sm">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us -->
<section class=" max-w-7xl mx-40 py-10 flex flex-col" id="connect-with-us">
    <h1 class="text-3xl font-bold mb-8">Connect With Us</h1>
    <h3 class="text-xl mb-4">Follow us on our social media platforms to stay updated with the latest news and events!</h3>
    <div class="flex space-x-6 items-center">
        <a href="https://www.facebook.com/umccecsg" target="_blank" class="flex items-center space-x-2 text-blue-600 hover:underline">
            <img src="/images/facebook.svg" alt="Facebook" class="w-20 h-20">
        </a>
        <a href="https://umindanao.edu.ph/colleges/cce" target="_blank" class="flex items-center space-x-2 text-pink-500 hover:underline">
            <img src="/images/UM_logo.png" alt="um website" class="w-22 h-22">
        </a>
    </div>

</section>
<?php require "partials/footer.php" ?>