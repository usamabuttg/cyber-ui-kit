<?php
$page_title = "Shopping Cart - 7cyber";
include 'includes/overall/header.php';
?>

<main class="w-full bg-white overflow-x-hidden">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px] py-6 lg:py-10">

    <!-- ===== BREADCRUMB ===== -->
    <div class="flex items-center gap-2 text-xs lg:text-sm text-gray-500 mb-6 flex-wrap">
      <a href="index.php" class="hover:text-gray-900 transition">Home</a>
      <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
      </svg>
      <span class="text-gray-900 font-bold">Shopping Cart</span>
    </div>

    <!-- ===== CART LAYOUT ===== -->
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_400px] gap-8 lg:gap-12">

      <!-- ===== LEFT: CART ITEMS ===== -->
      <div>

        <h1 class="text-2xl font-bold text-gray-900 mb-8">
          Shopping Cart
        </h1>

        <!-- Item 1 -->
        <div class="flex items-center gap-5 pb-6 mb-6 border-b border-gray-200">

          <!-- Image -->
          <div class="w-20 h-20 bg-[#fafafa] rounded-lg flex items-center justify-center shrink-0">
            <img src="images/Iphone14pro.png" alt="iPhone 14 Pro Max" class="max-h-full max-w-full object-contain p-2" />
          </div>

          <!-- Name + Code -->
          <div class="flex-1 min-w-0">
            <h3 class="text-sm font-bold text-gray-900 leading-snug mb-1">
              Apple iPhone 14 Pro Max 128Gb Deep Purple
            </h3>
            <p class="text-xs text-gray-400">#25139526913984</p>
          </div>

          <!-- Quantity -->
          <div class="flex items-center gap-2 shrink-0">
            <button class="text-gray-500 hover:text-gray-900 transition text-base font-medium">−</button>
            <div class="w-10 h-9 border border-gray-300 rounded-md flex items-center justify-center">
              <span class="text-sm font-bold text-gray-900">1</span>
            </div>
            <button class="text-gray-500 hover:text-gray-900 transition text-base font-medium">+</button>
          </div>

          <!-- Price -->
          <p class="text-base font-bold text-gray-900 whitespace-nowrap w-20 text-right shrink-0">$1399</p>

          <!-- Remove -->
          <button class="text-gray-400 hover:text-red-500 transition shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>

        </div>

        <!-- Item 2 -->
        <div class="flex items-center gap-5 pb-6 mb-6 border-b border-gray-200">

          <div class="w-20 h-20 bg-[#fafafa] rounded-lg flex items-center justify-center shrink-0">
            <img src="images/silverpods.png" alt="AirPods Max Silver" class="max-h-full max-w-full object-contain p-2" />
          </div>

          <div class="flex-1 min-w-0">
            <h3 class="text-sm font-bold text-gray-900 leading-snug mb-1">
              AirPods Max Silver
            </h3>
            <p class="text-xs text-gray-400">#53459358345</p>
          </div>

          <div class="flex items-center gap-2 shrink-0">
            <button class="text-gray-500 hover:text-gray-900 transition text-base font-medium">−</button>
            <div class="w-10 h-9 border border-gray-300 rounded-md flex items-center justify-center">
              <span class="text-sm font-bold text-gray-900">1</span>
            </div>
            <button class="text-gray-500 hover:text-gray-900 transition text-base font-medium">+</button>
          </div>

          <p class="text-base font-bold text-gray-900 whitespace-nowrap w-20 text-right shrink-0">$549</p>

          <button class="text-gray-400 hover:text-red-500 transition shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>

        </div>

        <!-- Item 3 -->
        <div class="flex items-center gap-5 pb-6 mb-6 border-b border-gray-200">

          <div class="w-20 h-20 bg-[#fafafa] rounded-lg flex items-center justify-center shrink-0">
            <img src="images/applewatch3.png" alt="Apple Watch Series 9" class="max-h-full max-w-full object-contain p-2" />
          </div>

          <div class="flex-1 min-w-0">
            <h3 class="text-sm font-bold text-gray-900 leading-snug mb-1">
              Apple Watch Series 9 GPS 41mm Starlight Aluminium
            </h3>
            <p class="text-xs text-gray-400">#63632324</p>
          </div>

          <div class="flex items-center gap-2 shrink-0">
            <button class="text-gray-500 hover:text-gray-900 transition text-base font-medium">−</button>
            <div class="w-10 h-9 border border-gray-300 rounded-md flex items-center justify-center">
              <span class="text-sm font-bold text-gray-900">1</span>
            </div>
            <button class="text-gray-500 hover:text-gray-900 transition text-base font-medium">+</button>
          </div>

          <p class="text-base font-bold text-gray-900 whitespace-nowrap w-20 text-right shrink-0">$399</p>

          <button class="text-gray-400 hover:text-red-500 transition shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>

        </div>

      </div>

      <!-- ===== RIGHT: ORDER SUMMARY ===== -->
      <div>
        <div class="bg-white border border-gray-200 rounded-lg p-6 lg:sticky lg:top-6">

          <h2 class="text-lg font-bold text-gray-900 mb-6">
            Order Summary
          </h2>

          <div class="mb-5">
            <label class="text-xs text-gray-500 block mb-2">Discount code / Promo code</label>
            <input type="text" placeholder="Code"
              class="w-full border border-gray-200 rounded-md px-4 py-2.5 text-sm outline-none focus:border-gray-400 transition" />
          </div>

          <div class="mb-6">
            <label class="text-xs text-gray-500 block mb-2">Your bonus card number</label>
            <div class="flex gap-2">
              <input type="text" placeholder="Enter Card Number"
                class="flex-1 border border-gray-200 rounded-md px-4 py-2.5 text-sm outline-none focus:border-gray-400 transition" />
              <button class="px-5 py-2.5 border border-gray-300 rounded-md text-xs font-medium text-gray-700 hover:border-gray-900 transition">
                Apply
              </button>
            </div>
          </div>

          <div class="space-y-3 pb-5 border-b border-gray-200">
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Subtotal</span>
              <span class="text-gray-900 font-bold">$2347</span>
            </div>
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Estimated Tax</span>
              <span class="text-gray-900 font-bold">$50</span>
            </div>
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Estimated shipping & Handling</span>
              <span class="text-gray-900 font-bold">$29</span>
            </div>
          </div>

          <div class="flex justify-between pt-5 mb-6">
            <span class="text-base font-bold text-gray-900">Total</span>
            <span class="text-base font-bold text-gray-900">$2426</span>
          </div>

          <a href="checkout.php" class="block w-full bg-[#1a1a1a] text-white text-center font-bold py-3.5 rounded-md hover:bg-black transition text-sm">
            Checkout
          </a>

        </div>
      </div>

    </div>

  </div>
</main>

<?php include 'includes/overall/footer.php'; ?>