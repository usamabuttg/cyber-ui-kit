<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $page_title ?? '7cyber'; ?></title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { inter: ['Inter', 'sans-serif'] },
        }
      }
    }
  </script>
</head>

<body class="bg-white font-inter">

  <!-- ============================================ -->
  <!-- ===== NAVBAR ===== -->
  <!-- ============================================ -->
  <nav class="w-full bg-white border-b border-gray-200">
    <div class="max-w-[1440px] mx-auto flex items-center
                px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px] py-4 gap-4 lg:gap-6">

      <!-- Logo -->
      <a href="index.php" class="shrink-0">
        <img src="images/Logo.png" alt="7cyber" class="h-7 sm:h-8 w-auto object-contain" />
      </a>

      <!-- Search Bar -->
      <div class="hidden md:flex w-[350px] lg:w-[450px]  xl:w-[550px] shrink-0">
        <div class="relative w-full">
          <svg class="w-4 h-4 absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"
               fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/>
          </svg>
          <input type="text" placeholder="Search" id="searchInput"
            class="w-full bg-gray-100 text-sm pl-11 pr-4 py-3.5 rounded-lg outline-none
                   focus:ring-2 focus:ring-gray-300 transition" />
        </div>
      </div>

      <!-- Nav Links + Icons (Right Side, Paas Paas) -->
      <div class="flex items-center gap-6 lg:gap-10 ml-auto">

        <!-- Nav Links -->
        <ul class="hidden lg:flex items-center gap-6 xl:gap-8 text-sm shrink-0">
          <li><a href="index.php" class="text-gray-900 font-semibold transition">Home</a></li>
          <li><a href="#" class="text-gray-500 hover:text-gray-900 transition">About</a></li>
          <li><a href="#" class="text-gray-500 hover:text-gray-900 transition">Contact Us</a></li>
          <li><a href="#" class="text-gray-500 hover:text-gray-900 transition">Blog</a></li>
        </ul>

        <!-- Icons -->
        <div class="flex items-center gap-4 sm:gap-5 shrink-0">
          <button class="text-gray-900 hover:text-black transition">
            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
            </svg>
          </button>
          <a href="cart.php" class="text-gray-900 hover:text-black transition">
            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
            </svg>
          </a>
          <button class="hidden sm:block text-gray-900 hover:text-black transition">
            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
            </svg>
          </button>
          <button onclick="toggleMobileMenu()" class="lg:hidden text-gray-900">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>

      </div>

    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden lg:hidden border-t border-gray-200 bg-white">
      <ul class="flex flex-col px-6 py-4 gap-4 text-sm">
        <li><a href="index.php" class="text-gray-900 font-semibold">Home</a></li>
        <li><a href="#" class="text-gray-500">About</a></li>
        <li><a href="#" class="text-gray-500">Contact Us</a></li>
        <li><a href="#" class="text-gray-500">Blog</a></li>
      </ul>
    </div>
  </nav>


  <!-- ============================================ -->
  <!-- ===== CATEGORY BAR ===== -->
  <!-- ============================================ -->
  <div class="hidden lg:block w-full bg-[#1a1a1a]">
    <div class="max-w-[1440px] mx-auto flex items-center justify-between
                px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px] py-3.5 text-sm 
                gap-2 overflow-x-auto">

      <!-- Phones (Active) -->
      <a href="category.php" class="flex items-center gap-2.5 bg-white text-gray-900 font-medium px-4 py-2 rounded-md whitespace-nowrap">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
          <rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/>
        </svg>
        <span>Phones</span>
      </a>
      <span class="text-gray-600 text-lg">|</span>

      <!-- Computers -->
      <a href="category.php" class="flex items-center gap-2.5 text-gray-300 hover:text-white transition whitespace-nowrap">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
          <rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8M12 16v4"/>
        </svg>
        <span>Computers</span>
      </a>
      <span class="text-gray-600 text-lg">|</span>

      <!-- Smart Watches -->
      <a href="category.php" class="flex items-center gap-2.5 text-gray-300 hover:text-white transition whitespace-nowrap">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
          <rect x="7" y="7" width="10" height="10" rx="2"/><path d="M9 7V4h6v3M9 17v3h6v-3"/>
        </svg>
        <span>Smart Watches</span>
      </a>
      <span class="text-gray-600 text-lg">|</span>

      <!-- Cameras -->
      <a href="category.php" class="flex items-center gap-2.5 text-gray-300 hover:text-white transition whitespace-nowrap">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
          <path d="M3 8a2 2 0 012-2h2l1.5-2h7L17 6h2a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/>
          <circle cx="12" cy="13" r="3.5"/>
        </svg>
        <span>Cameras</span>
      </a>
      <span class="text-gray-600 text-lg">|</span>

      <!-- Headphones -->
      <a href="category.php" class="flex items-center gap-2.5 text-gray-300 hover:text-white transition whitespace-nowrap">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
          <path d="M4 14v-2a8 8 0 0116 0v2"/>
          <rect x="3" y="14" width="4" height="6" rx="1.5"/>
          <rect x="17" y="14" width="4" height="6" rx="1.5"/>
        </svg>
        <span>Headphones</span>
      </a>
      <span class="text-gray-600 text-lg">|</span>

      <!-- Gaming -->
      <a href="category.php" class="flex items-center gap-2.5 text-gray-300 hover:text-white transition whitespace-nowrap">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
          <path d="M6 12h4M8 10v4M15 11h.01M17 13h.01"/>
          <path d="M17.5 6h-11A3.5 3.5 0 003 9.5l-1 7A2.5 2.5 0 004.5 19L7 16h10l2.5 3a2.5 2.5 0 002.5-2.5l-1-7A3.5 3.5 0 0017.5 6z"/>
        </svg>
        <span>Gaming</span>
      </a>

    </div>
  </div>

  <!-- ===== MAIN CONTENT YAHAN SE SHURU HOTA HAI ===== -->
  <main class="w-full bg-white">