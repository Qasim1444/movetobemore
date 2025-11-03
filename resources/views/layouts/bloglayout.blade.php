<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Move to be More -</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/optima" rel="stylesheet">
</head>

<body>
<header class="fixed top-0 left-0 w-full bg-white z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-between">
    
    <!-- Logo -->
    <a href="https://movetobemore.com" class="flex items-center">
      <img 
        src="https://movetobemore.com/wp-content/uploads/2022/09/move-to-be-more-logo.png"
        alt="Move To Be More"
        class="h-10 w-auto"
        loading="eager"
        decoding="async"
      >
    </a>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex items-center space-x-6 text-gray-700">
      <a href="https://movetobemore.com/#about" class="hover:text-blue-600 transition">About</a>
      <a href="https://movetobemore.com/services/" class="hover:text-blue-600 transition">Services</a>
      <a href="https://movetobemore.com/#reviews" class="hover:text-blue-600 transition">Reviews</a>
      <a href="https://movetobemore.com/blog/" class="hover:text-blue-600 transition">Blog</a>
      <a href="#contact" class="px-4 py-2 border border-gray-700 rounded hover:bg-gray-700 hover:text-white transition">Contact</a>
    </nav>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button" class="md:hidden flex flex-col space-y-1 focus:outline-none" aria-label="Open menu">
      <span class="w-6 h-0.5 bg-gray-800"></span>
      <span class="w-6 h-0.5 bg-gray-800"></span>
      <span class="w-6 h-0.5 bg-gray-800"></span>
    </button>
  </div>

  <!-- Mobile Menu -->
  <nav id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
    <ul class="flex flex-col space-y-3 p-4 text-gray-700">
      <li><a href="https://movetobemore.com/#about" class="hover:text-blue-600">About</a></li>
      <li><a href="https://movetobemore.com/services/" class="hover:text-blue-600">Services</a></li>
      <li><a href="https://movetobemore.com/#reviews" class="hover:text-blue-600">Reviews</a></li>
      <li><a href="https://movetobemore.com/blog/" class="hover:text-blue-600">Blog</a></li>
      <li><a href="#contact" class="px-4 py-2 border border-gray-700 rounded hover:bg-gray-700 hover:text-white transition">Contact</a></li>
    </ul>
  </nav>
</header>


    <main>
      
     @yield('content')
     @include('pages.blogcard')
     @include('sections.Letschat')
        @include('sections.footer')
    </main>

    <script>
  const menuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');

  menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>


    <script src="../js/tailwind.js"></script>
</body>

</html>
