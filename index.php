<?php
$page_title = "7cyber - Home";
include 'includes/overall/header.php';
?>

<!-- ============================================ -->
<!-- 1. HERO SECTION -->
<!-- ============================================ -->
<section class="w-full bg-[#1a1a1a] overflow-hidden">

  <!-- ===== MOBILE VIEW ===== -->
  <div class="lg:hidden flex flex-col items-center text-center px-6 py-10">
    <p class="text-gray-400 text-xs tracking-wide mb-3">Pro.Beyond.</p>
    <h1 class="text-4xl font-light text-white leading-tight mb-3">
      iPhone 14 <span class="font-bold">Pro</span>
    </h1>
    <p class="text-gray-400 text-xs leading-relaxed max-w-xs mb-6">
      Created to change everything for the better. For everyone
    </p>
    <a href="category.php" class="inline-block border border-white text-white
                      px-8 py-3 rounded-md text-sm font-medium
                      hover:bg-white hover:text-black transition duration-300 mb-8">
      Shop Now
    </a>
    <img src="images/Iphone.png" alt="iPhone 14 Pro"
         class="w-full max-w-[280px] h-auto object-contain" />
  </div>

  <!-- ===== DESKTOP VIEW ===== -->
  <div class="hidden lg:block">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px] 
                py-10 lg:py-0
                grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-[24px]
                items-center lg:h-[632px]">
      <div class="flex flex-col items-start text-left space-y-4 lg:space-y-5 order-2 lg:order-1">
        <p class="text-gray-400 text-xs lg:text-sm tracking-wide">Pro.Beyond.</p>
        <h1 class="text-3xl sm:text-4xl lg:text-[68px] font-light text-white
                   leading-[1.05] tracking-[-2px]">
          iPhone 14 <span class="font-bold">Pro</span>
        </h1>
        <p class="text-gray-400 text-xs lg:text-sm max-w-[420px] leading-relaxed">
          Created to change everything for the better. For everyone.
        </p>
        <div class="pt-2">
          <a href="category.php" class="inline-block border border-white text-white
                            px-8 lg:px-10 py-3 lg:py-3.5 rounded-md text-sm font-medium
                            hover:bg-white hover:text-black transition duration-300">
            Shop Now
          </a>
        </div>
      </div>
      <div class="relative flex items-center justify-center lg:justify-end
                  order-1 lg:order-2 w-full h-full overflow-hidden">
        <img src="images/Iphone.png" alt="iPhone 14 Pro"
             class="w-full max-w-sm sm:max-w-md lg:max-w-lg xl:max-w-xl 
                    h-auto max-h-[500px] lg:max-h-[600px]
                    object-contain object-right
                    drop-shadow-2xl" />
      </div>
    </div>
  </div>

</section>


<!-- ============================================ -->
<!-- 2. PRODUCTS GRID (Mobile Stack + Desktop Grid) -->
<!-- ============================================ -->
<section class="w-full bg-white">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px]">

    <!-- ===== MOBILE VIEW (Stack - Figma Order) ===== -->
    <div class="lg:hidden flex flex-col gap-0">

      <!-- Apple AirPods Max -->
      <div class="bg-[#f5f5f5] flex flex-col items-center text-center py-10 px-6 border-b border-dashed border-gray-300">
        <img src="images/mobile-airpods.png" alt="Apple AirPods Max"
             class="h-[160px] w-auto object-contain mb-5" />
        <h3 class="text-xl font-bold text-gray-900 mb-3">Apple AirPods Max</h3>
        <p class="text-gray-500 text-xs leading-relaxed max-w-sm">
          Computational audio. Listen, it's powerful
        </p>
      </div>

      <!-- Apple Vision Pro -->
      <div class="bg-[#1a1a1a] flex flex-col items-center text-center py-10 px-6 border-b border-dashed border-gray-300">
        <img src="images/mobile-vision.png" alt="Apple Vision Pro"
             class="h-[160px] w-auto object-contain mb-5" />
        <h3 class="text-xl font-bold text-white mb-3">Apple Vision Pro</h3>
        <p class="text-gray-400 text-xs leading-relaxed max-w-sm">
          An immersive way to experience entertainment
        </p>
      </div>

      <!-- PlayStation 5 -->
      <div class="bg-white flex flex-col items-center text-center py-10 px-6 border-b border-dashed border-gray-300">
        <img src="images/mobile-playstation.png" alt="PlayStation 5"
             class="h-[180px] w-auto object-contain mb-5" />
        <h2 class="text-xl font-bold text-gray-900 mb-3">PlayStation 5</h2>
        <p class="text-gray-500 text-xs leading-relaxed max-w-sm">
          Incredibly powerful CPUs, GPUs, and an SSD with integrated I/O will redefine your PlayStation experience.
        </p>
      </div>

      <!-- MacBook Air (Mobile) -->
      <div class="bg-[#f5f5f5] flex flex-col items-center text-center py-10 px-6">
        <img src="images/mobile-macbook.png" alt="MacBook Air"
             class="w-full max-w-[320px] h-auto object-contain mb-5" />
        <h2 class="text-xl font-bold text-gray-900 mb-3">MacBook Air</h2>
        <p class="text-gray-500 text-xs leading-relaxed max-w-sm mb-5">
          The new 15-inch MacBook Air makes room for more of what you love with a spacious Liquid Retina display.
        </p>
        <a href="category.php" class="block w-full border border-gray-800 text-gray-900
                          px-6 py-3 rounded-md text-sm font-medium text-center
                          hover:bg-gray-900 hover:text-white transition duration-300">
          Shop Now
        </a>
      </div>

    </div>

    <!-- ===== DESKTOP VIEW (Grid) ===== -->
    <div class="hidden lg:grid grid-cols-2 gap-0">

      <!-- LEFT COLUMN -->
      <div class="flex flex-col gap-0">

        <!-- PlayStation 5 -->
        <div class="bg-white flex flex-row items-center h-[310px] overflow-hidden">
          <div class="w-1/2 h-full flex items-center justify-start pl-0">
            <img src="images/playstation.png" alt="PlayStation 5"
                 class="h-[280px] w-auto object-contain" />
          </div>
          <div class="w-1/2 flex items-center pr-8">
            <div class="space-y-3 text-left">
              <h2 class="text-3xl font-bold text-gray-900">PlayStation 5</h2>
              <p class="text-gray-500 text-sm leading-relaxed">
                Incredibly powerful CPUs, GPUs, and an SSD with integrated I/O will redefine your PlayStation experience.
              </p>
            </div>
          </div>
        </div>

        <!-- AirPods + Vision -->
        <div class="grid grid-cols-2 gap-0 h-[311px]">

          <div class="bg-[#f5f5f5] flex flex-row items-center h-full overflow-hidden">
            <div class="w-[40%] h-full flex items-center justify-start pl-0">
              <img src="images/airpods.png" alt="Apple AirPods Max"
                   class="h-[180px] w-auto object-contain" />
            </div>
            <div class="w-[60%] flex items-center pl-0 pr-0">
              <div class="space-y-2 text-left">
                <h3 class="text-sm font-normal text-gray-900 leading-tight px-8">
                  Apple<br/>AirPods Max
                </h3>
                <p class="text-gray-500 text-xs leading-relaxed">
                  Computational audio.<br/>Listen, it's powerful
                </p>
              </div>
            </div>
          </div>

          <div class="bg-[#1a1a1a] flex flex-row items-center h-full overflow-hidden">
            <div class="w-[40%] h-full flex items-center justify-start pl-0">
              <img src="images/vision.png" alt="Apple Vision Pro"
                   class="h-[180px] w-auto object-contain" />
            </div>
            <div class="w-[60%] flex items-center pl-4 pr-4">
              <div class="space-y-2 text-left">
                <h3 class="text-xl font-bold text-white leading-tight">
                  Apple<br/>Vision Pro
                </h3>
                <p class="text-gray-400 text-xs leading-relaxed">
                  An immersive way to<br/>experience entertainment
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <!-- RIGHT COLUMN (MacBook Air) -->
      <div class="bg-[#f5f5f5] flex flex-row items-stretch gap-0 h-[621px] overflow-hidden">

        <div class="w-1/2 flex flex-col justify-center pl-0 pr-0">
          <div class="space-y-3">
            <h2 class="text-[42px] font-light text-gray-900 leading-tight whitespace-nowrap">
              MacBook <span class="font-semibold">Air</span>
            </h2>
            <p class="text-gray-500 text-sm leading-relaxed max-w-[380px]">
              The new 15-inch MacBook Air makes room for more of what you love with a spacious Liquid Retina display.
            </p>
            <div class="pt-2">
              <a href="category.php" class="inline-block border border-gray-800 text-gray-900
                                px-6 py-2.5 rounded-md text-sm font-medium
                                hover:bg-gray-900 hover:text-white transition duration-300">
                Shop Now
              </a>
            </div>
          </div>
        </div>

        <div class="w-1/2 h-full flex items-end py-16 justify-center overflow-hidden">
          <img src="images/mackbook-air.png" alt="MacBook Air"
               class="w-full h-auto object-contain object-bottom" />
        </div>

      </div>

    </div>

  </div>
</section>


<!-- ============================================ -->
<!-- 3. BROWSE BY CATEGORY -->
<!-- ============================================ -->
<section class="w-full bg-white py-12 lg:py-14">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px]">

    <div class="flex items-center justify-between mb-8">
      <h2 class="text-lg lg:text-xl font-bold text-gray-900">Browse By Category</h2>
      <div class="hidden lg:flex items-center gap-4">
        <button class="text-gray-400 hover:text-gray-900 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
          </svg>
        </button>
        <button class="text-gray-400 hover:text-gray-900 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
          </svg>
        </button>
      </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-6">
      <a href="category.php" class="group bg-[#f5f5f5] rounded-xl flex flex-col items-center justify-center gap-4 w-full aspect-square max-w-[170px] mx-auto hover:bg-gray-200 transition">
        <img src="images/Phones.png" alt="Phones" class="w-10 h-10 object-contain" />
        <span class="text-sm font-bold text-gray-900 text-center leading-tight">Phones</span>
      </a>
      <a href="category.php" class="group bg-[#f5f5f5] rounded-xl flex flex-col items-center justify-center gap-4 w-full aspect-square max-w-[170px] mx-auto hover:bg-gray-200 transition">
        <img src="images/Smart watches.png" alt="Smart Watches" class="w-10 h-10 object-contain" />
        <span class="text-sm font-bold text-gray-900 text-center leading-tight">Smart Watches</span>
      </a>
      <a href="category.php" class="group bg-[#f5f5f5] rounded-xl flex flex-col items-center justify-center gap-4 w-full aspect-square max-w-[170px] mx-auto hover:bg-gray-200 transition">
        <img src="images/cameras.png" alt="Cameras" class="w-10 h-10 object-contain" />
        <span class="text-sm font-bold text-gray-900 text-center leading-tight">Cameras</span>
      </a>
      <a href="category.php" class="group bg-[#f5f5f5] rounded-xl flex flex-col items-center justify-center gap-4 w-full aspect-square max-w-[170px] mx-auto hover:bg-gray-200 transition">
        <img src="images/headphones.png" alt="Headphones" class="w-10 h-10 object-contain" />
        <span class="text-sm font-bold text-gray-900 text-center leading-tight">Headphones</span>
      </a>
      <a href="category.php" class="group bg-[#f5f5f5] rounded-xl flex flex-col items-center justify-center gap-4 w-full aspect-square max-w-[170px] mx-auto hover:bg-gray-200 transition">
        <img src="images/computers.png" alt="Computers" class="w-10 h-10 object-contain" />
        <span class="text-sm font-bold text-gray-900 text-center leading-tight">Computers</span>
      </a>
      <a href="category.php" class="group bg-[#f5f5f5] rounded-xl flex flex-col items-center justify-center gap-4 w-full aspect-square max-w-[170px] mx-auto hover:bg-gray-200 transition">
        <img src="images/Gaming.png" alt="Gaming" class="w-10 h-10 object-contain" />
        <span class="text-sm font-bold text-gray-900 text-center leading-tight">Gaming</span>
      </a>
    </div>
  </div>
</section>


<!-- ============================================ -->
<!-- 4. NEW ARRIVAL (Mobile 2 cols + Desktop 4 cols) -->
<!-- ============================================ -->
<section class="w-full bg-white py-10">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px]">

    <div class="flex items-center gap-6 lg:gap-8 border-b border-gray-200 mb-8 overflow-x-auto whitespace-nowrap">
      <button class="pb-3 text-sm font-bold text-gray-900 border-b-2 border-gray-900 whitespace-nowrap">New Arrival</button>
      <button class="pb-3 text-sm text-gray-400 hover:text-gray-900 transition whitespace-nowrap">Bestseller</button>
      <button class="pb-3 text-sm text-gray-400 hover:text-gray-900 transition whitespace-nowrap">Featured Products</button>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-[32px]">

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/Iphone14pro.png" alt="iPhone 14 Pro Max" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Apple iPhone 14 Pro Max 128GB Deep Purple
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$900</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/camera.png" alt="Blackmagic Camera" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Blackmagic Pocket Cinema Camera 6k
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$2535</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/Applewatch.png" alt="Apple Watch" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Apple Watch Series 9 GPS 41mm Starlight
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$399</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/silverpods.png" alt="AirPods Max" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          AirPods Max Silver
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$549</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/Glaxywatch.png" alt="Samsung Galaxy Watch6" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Samsung Galaxy Watch6 Classic 4...
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$369</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-red-500">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/blckfone.png" alt="Galaxy Z Fold5" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Galaxy Z Fold5 Unlocked | 256GB...
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$1799</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/Glaxybuds.png" alt="Galaxy Buds FE" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Galaxy Buds FE Graphite
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$99.99</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/appleipad.png" alt="Apple iPad 9" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Apple iPad 9 10.2" 64GB Wi-Fi
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$398</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

    </div>
  </div>
</section>


<!-- ============================================ -->
<!-- 5. POPULAR PRODUCTS (Mobile Carousel) -->
<!-- ============================================ -->
<section class="w-full bg-white py-12 overflow-hidden">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px]">

    <!-- ===== MOBILE VIEW (Single Card + Dots) ===== -->
    <div class="lg:hidden">

      <!-- Card 1: Ipad Pro (Mobile) -->
      <div class="bg-[#f5f5f5] flex flex-col">
        <div class="h-[280px] flex items-center justify-center overflow-hidden">
          <img src="images/ipadpro.png" alt="Ipad Pro" class="w-full h-full object-cover" />
        </div>
        <div class="p-6 space-y-3 text-center">
          <h3 class="text-xl font-bold text-gray-900">Ipad Pro</h3>
          <p class="text-gray-500 text-xs leading-relaxed">
            iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and ease of use.
          </p>
          <div class="pt-2">
            <a href="category.php" class="inline-block border border-gray-800 text-gray-900
                              px-8 py-3 rounded-md text-sm font-medium
                              hover:bg-gray-900 hover:text-white transition duration-300">
              Shop Now
            </a>
          </div>
        </div>
      </div>

      <!-- Dots (Carousel Indicators) -->
      <div class="flex items-center justify-center gap-2 mt-6">
        <button class="w-2 h-2 rounded-full bg-gray-900"></button>
        <button class="w-2 h-2 rounded-full bg-gray-300"></button>
        <button class="w-2 h-2 rounded-full bg-gray-300"></button>
        <button class="w-2 h-2 rounded-full bg-gray-300"></button>
      </div>

    </div>

    <!-- ===== DESKTOP VIEW (4 Cards) ===== -->
    <div class="hidden lg:grid grid-cols-4 gap-0">

      <div class="bg-white flex flex-col h-[640px]">
        <div class="h-[340px] flex items-center justify-center overflow-hidden">
          <img src="images/Big Banner.png" alt="Popular Products" class="w-full h-full object-cover" />
        </div>
        <div class="p-6 space-y-3 flex-grow">
          <h3 class="text-lg lg:text-2xl font-bold text-gray-900">Popular Products</h3>
          <p class="text-gray-500 text-xs lg:text-sm leading-relaxed">
            iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and ease of use.
          </p>
          <div class="pt-2">
            <a href="category.php" class="inline-block border border-gray-800 text-gray-900
                              px-6 py-2.5 rounded-md text-sm font-bold
                              hover:bg-gray-900 hover:text-white transition duration-300">
              Shop Now
            </a>
          </div>
        </div>
      </div>

      <div class="bg-[#fafafa] flex flex-col h-[640px]">
        <div class="h-[340px] flex items-center justify-center overflow-hidden">
          <img src="images/ipadpro.png" alt="Ipad Pro" class="w-full h-full object-cover" />
        </div>
        <div class="p-6 space-y-3 flex-grow">
          <h3 class="text-lg lg:text-2xl font-bold text-gray-900">Ipad Pro</h3>
          <p class="text-gray-500 text-xs lg:text-sm leading-relaxed">
            iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and ease of use.
          </p>
          <div class="pt-2">
            <a href="category.php" class="inline-block border border-gray-800 text-gray-900
                              px-6 py-2.5 rounded-md text-sm font-bold
                              hover:bg-gray-900 hover:text-white transition duration-300">
              Shop Now
            </a>
          </div>
        </div>
      </div>

      <div class="bg-[#ececec] flex flex-col h-[640px]">
        <div class="h-[340px] flex items-center justify-center overflow-hidden">
          <img src="images/glaxyfone.png" alt="Samsung Galaxy" class="w-full h-full object-cover" />
        </div>
        <div class="p-6 space-y-3 flex-grow">
          <h3 class="text-lg lg:text-2xl font-bold text-gray-900">Samsung Galaxy</h3>
          <p class="text-gray-500 text-xs lg:text-sm leading-relaxed">
            iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and ease of use.
          </p>
          <div class="pt-2">
            <a href="category.php" class="inline-block border border-gray-800 text-gray-900
                              px-6 py-2.5 rounded-md text-sm font-bold
                              hover:bg-gray-900 hover:text-white transition duration-300">
              Shop Now
            </a>
          </div>
        </div>
      </div>

      <div class="bg-[#1a1a1a] flex flex-col h-[640px]">
        <div class="h-[340px] flex items-center justify-center overflow-hidden">
          <img src="images/Macbookpro.png" alt="Macbook Pro" class="w-full h-full object-cover" />
        </div>
        <div class="p-6 space-y-3 flex-grow">
          <h3 class="text-lg lg:text-2xl font-bold text-white">Macbook Pro</h3>
          <p class="text-gray-400 text-xs lg:text-sm leading-relaxed">
            iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and ease of use.
          </p>
          <div class="pt-2">
            <a href="category.php" class="inline-block border border-white text-white
                              px-6 py-2.5 rounded-md text-sm font-bold
                              hover:bg-white hover:text-gray-900 transition duration-300">
              Shop Now
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================ -->
<!-- 6. DISCOUNTS (Mobile 2 cols) -->
<!-- ============================================ -->
<section class="w-full bg-white py-12">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px]">

    <h2 class="text-base lg:text-xl font-bold text-gray-900 mb-6">
      Discounts up to -50%
    </h2>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-[32px]">

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/iphone1.png" alt="iPhone 14 Pro 512GB Gold" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Apple iPhone 14 Pro 512GB Gold
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$1437</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/airpods2.png" alt="AirPods Max Silver" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">AirPods Max Silver</p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$2535</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/applewatch3.png" alt="Apple Watch Series 9" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Apple Watch Series 9 GPS 41mm Starlight
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$399</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

      <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-4 lg:p-5 flex flex-col">
        <button class="absolute top-3 right-3 lg:top-4 lg:right-4 text-gray-400 hover:text-red-500 transition">
          <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
          </svg>
        </button>
        <div class="h-32 lg:h-48 flex items-center justify-center mb-3 lg:mb-4">
          <img src="images/appleiphone4.png" alt="iPhone 14 Pro 1TB Gold" class="max-h-full object-contain" />
        </div>
        <p class="text-xs lg:text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
          Apple iPhone 14 Pro 1TB Gold
        </p>
        <p class="text-lg lg:text-xl font-bold text-gray-900 mb-2 lg:mb-3 text-center">$549</p>
        <button class="w-full bg-gray-900 text-white text-xs lg:text-sm font-bold py-2 lg:py-2.5 rounded-md hover:bg-black transition">Buy Now</button>
      </div>

    </div>
  </div>
</section>


<!-- ============================================ -->
<!-- 7. BIG SUMMER SALE -->
<!-- ============================================ -->
<section class="w-full bg-white pt-12 pb-10">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px]">
    <a href="category.php" class="block w-full rounded-lg overflow-hidden">
      <img src="images/Banner 2.png" alt="Big Summer Sale"
           class="w-full h-auto object-cover rounded-lg hover:opacity-95 transition" />
    </a>
  </div>
</section>

<?php include 'includes/overall/footer.php'; ?>