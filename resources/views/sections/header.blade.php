<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Left Popup Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- ✅ Existing Navbar (unchanged) -->
<header class="bg-gray-900 text-white">
    <div class="py-5 px-8 -mb-40">
        <div class="max-w-5xl mx-auto">
            <div class="flex items-center justify-between p-5">
                <!-- Logo -->
                <div class="flex">
                    <img class="max-w-56" src="../image/nav-logo.png" alt="Logo">
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex items-center gap-12 text-lg">
                    <a href="{{ url('/') }}" class="hover:text-orange-200 transition">Home</a>
                    <a href="{{ url('/about') }}" class="hover:text-orange-200 transition">About</a>
                    <a href="{{ url('/blog') }}" class="hover:text-orange-200 transition">Blog</a>
                    <a href="{{ url('/contact') }}" class="hover:text-orange-200 transition">Contact</a>
                    <a href="{{ url('/privacy') }}" class="hover:text-orange-200 transition">privacy</a>
                    <button class="py-2 px-6 rounded-lg text-gray-800 hover:text-white transition duration-300 bg-orange-50 hover:bg-orange-400 border border-white">
                        Contact
                    </button>
                </nav>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- ✅ Left Side Drawer + Overlay -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

<div id="sideMenu" class="fixed top-0 left-0 h-full w-64 bg-orange-50 transform -translate-x-full transition-transform duration-300 z-50 shadow-lg">
    <div class="flex justify-end p-4">
        <button id="closeBtn" class="text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <nav class="flex flex-col space-y-6 p-6 text-lg text-orange-600">
        <a href="{{ url('/about') }}" class="hover:text-gray-900">About</a>
        <a href="{{ url('/services') }}" class="hover:text-gray-900">Services</a>
        <a href="{{ url('/reviews') }}" class="hover:text-gray-900">Reviews</a>
        <a href="{{ url('/blog') }}" class="hover:text-gray-900">Blog</a>
        <a href="{{ url('/contact') }}" class="hover:text-gray-900">Contact</a>
    </nav>
</div>

<!-- ✅ Script -->
<script>
    const menuBtn = document.querySelector('button.md\\:hidden');
    const sideMenu = document.getElementById('sideMenu');
    const closeBtn = document.getElementById('closeBtn');
    const overlay = document.getElementById('overlay');

    menuBtn.addEventListener('click', () => {
        sideMenu.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
        sideMenu.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

    overlay.addEventListener('click', () => {
        sideMenu.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
</script>

</body>
</html>
