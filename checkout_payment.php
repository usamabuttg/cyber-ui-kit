<?php
$page_title = "Checkout - Payment - 7cyber";
include 'includes/overall/header.php';
?>

<main class="w-full bg-white overflow-x-hidden">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px] py-6 lg:py-10">

    <!-- ===== STEPS ===== -->
    <div class="flex items-center w-full mb-8 lg:mb-14">

      <div class="flex items-center gap-2 lg:gap-3 opacity-50 shrink-0">
        <div class="w-7 h-7 lg:w-9 lg:h-9 rounded-full bg-gray-300 flex items-center justify-center shrink-0">
          <svg class="w-3.5 h-3.5 lg:w-4 lg:h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="9"/>
            <circle cx="12" cy="12" r="3" fill="currentColor"/>
          </svg>
        </div>
        <div class="leading-tight">
          <p class="text-[10px] text-gray-400">Step 1</p>
          <p class="text-sm font-medium text-gray-400">Address</p>
        </div>
      </div>

      <div class="flex-1 border-t border-dashed border-gray-300 mx-3 lg:mx-4"></div>

      <div class="flex items-center gap-2 lg:gap-3 opacity-50 shrink-0">
        <div class="w-7 h-7 lg:w-9 lg:h-9 rounded-full bg-gray-300 flex items-center justify-center shrink-0">
          <svg class="w-3.5 h-3.5 lg:w-4 lg:h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M1 3h15v13H1z"/>
            <path d="M16 8h4l3 3v5h-7z"/>
            <circle cx="5.5" cy="18.5" r="2.5"/>
            <circle cx="18.5" cy="18.5" r="2.5"/>
          </svg>
        </div>
        <div class="leading-tight">
          <p class="text-[10px] text-gray-400">Step 2</p>
          <p class="text-sm font-medium text-gray-400">Shipping</p>
        </div>
      </div>

      <div class="flex-1 border-t border-dashed border-gray-300 mx-3 lg:mx-4"></div>

      <div class="flex items-center gap-2 lg:gap-3 shrink-0">
        <div class="w-7 h-7 lg:w-9 lg:h-9 rounded-full border-2 border-[#1a1a1a] flex items-center justify-center shrink-0">
          <div class="w-2.5 h-2.5 lg:w-3 lg:h-3 rounded-full bg-[#1a1a1a]"></div>
        </div>
        <div class="leading-tight">
          <p class="text-[10px] text-gray-500">Step 3</p>
          <p class="text-sm font-bold text-gray-900">Payment</p>
        </div>
      </div>

    </div>

    <!-- ============================================ -->
    <!-- ===== MOBILE VIEW (Sirf Payment) ===== -->
    <!-- ============================================ -->
    <div class="lg:hidden mb-6">

      <h2 class="text-base font-bold text-gray-900 mb-5">Payment</h2>

      <div class="flex items-center gap-6 border-b border-gray-200 mb-6 overflow-x-auto whitespace-nowrap">
        <button class="pb-3 text-sm font-bold text-gray-900 border-b-2 border-gray-900 whitespace-nowrap">Credit Card</button>
        <button class="pb-3 text-sm text-gray-400 hover:text-gray-900 transition whitespace-nowrap">PayPal</button>
        <button class="pb-3 text-sm text-gray-400 hover:text-gray-900 transition whitespace-nowrap">PayPal Credit</button>
      </div>

      <!-- Card Preview -->
      <div class="w-full max-w-[400px] h-[210px] rounded-xl bg-[#1a1a1a] p-5 flex flex-col justify-between mb-6 relative overflow-hidden">

        <div class="absolute inset-0 opacity-10 pointer-events-none">
          <div class="absolute -top-10 -right-10 w-40 h-[300px] bg-white rotate-45"></div>
          <div class="absolute -top-10 right-20 w-20 h-[300px] bg-white rotate-45"></div>
        </div>

        <div class="relative flex items-center justify-between">
          <div class="w-9 h-6 rounded bg-yellow-400/90"></div>
          <svg class="w-4 h-4 text-gray-400 rotate-90" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M5 12.55a11 11 0 0114.08 0"/>
            <path d="M1.42 9a16 16 0 0121.16 0"/>
            <path d="M8.53 16.11a6 6 0 016.95 0"/>
            <line x1="12" y1="20" x2="12.01" y2="20"/>
          </svg>
        </div>

        <div class="relative flex items-center gap-4 text-white text-sm font-mono tracking-wider">
          <span>4085</span>
          <span>9536</span>
          <span>8475</span>
          <span>9530</span>
        </div>

        <div class="relative flex items-end justify-between">
          <div>
            <p class="text-[10px] text-gray-400 mb-1">Cardholder</p>
            <p class="text-xs font-bold text-white">Cardholder</p>
          </div>
          <div class="flex items-center -space-x-3">
            <div class="w-6 h-6 rounded-full bg-red-500"></div>
            <div class="w-6 h-6 rounded-full bg-yellow-500"></div>
          </div>
        </div>

      </div>

      <!-- Form -->
      <div class="space-y-3 max-w-[400px]">
        <input type="text" placeholder="Cardholder Name" class="w-full border border-gray-200 rounded-md px-4 py-3 text-sm outline-none focus:border-gray-400 transition" />
        <input type="text" placeholder="Card Number" class="w-full border border-gray-200 rounded-md px-4 py-3 text-sm outline-none focus:border-gray-400 transition" />
        <div class="grid grid-cols-2 gap-3">
          <input type="text" placeholder="Exp.Date" class="w-full border border-gray-200 rounded-md px-4 py-3 text-sm outline-none focus:border-gray-400 transition" />
          <input type="text" placeholder="CVV" class="w-full border border-gray-200 rounded-md px-4 py-3 text-sm outline-none focus:border-gray-400 transition" />
        </div>
        <label class="flex items-center gap-2 cursor-pointer pt-2">
          <input type="checkbox" class="w-4 h-4 accent-gray-900" />
          <span class="text-xs font-bold text-gray-900">Same as billing address</span>
        </label>
      </div>

    </div>


    <!-- ============================================ -->
    <!-- ===== DESKTOP VIEW (Summary + Payment) ===== -->
    <!-- ============================================ -->
    <div class="hidden lg:grid grid-cols-[420px_1fr] gap-10">

      <!-- ===== LEFT: SUMMARY ===== -->
      <div class="bg-white border border-gray-100 rounded-lg p-6 h-fit">

        <h2 class="text-base font-bold text-gray-900 mb-5">Summary</h2>

        <div class="flex items-center gap-3 bg-[#f5f5f5] rounded-md p-3 mb-3">
          <img src="images/Iphone14pro.png" alt="iPhone" class="w-10 h-10 object-contain" />
          <p class="text-xs font-medium text-gray-900 flex-1">Apple iPhone 14 Pro Max 128Gb</p>
          <p class="text-xs font-bold text-gray-900">$1399</p>
        </div>

        <div class="flex items-center gap-3 bg-[#f5f5f5] rounded-md p-3 mb-3">
          <img src="images/silverpods.png" alt="AirPods" class="w-10 h-10 object-contain" />
          <p class="text-xs font-medium text-gray-900 flex-1">AirPods Max Silver</p>
          <p class="text-xs font-bold text-gray-900">$549</p>
        </div>

        <div class="flex items-center gap-3 bg-[#f5f5f5] rounded-md p-3 mb-6">
          <img src="images/applewatch3.png" alt="Watch" class="w-10 h-10 object-contain" />
          <p class="text-xs font-medium text-gray-900 flex-1">Apple Watch Series 9 GPS 41mm</p>
          <p class="text-xs font-bold text-gray-900">$399</p>
        </div>

        <div class="mb-5">
          <p class="text-xs text-gray-500 mb-1">Address</p>
          <p class="text-xs font-bold text-gray-900">1131 Dusty Townline, Jacksonville, TX 40322</p>
        </div>

        <div class="mb-5">
          <p class="text-xs text-gray-500 mb-1">Shipment method</p>
          <p class="text-xs font-bold text-gray-900">Free</p>
        </div>

        <div class="space-y-3 pt-5 border-t border-gray-200">
          <div class="flex justify-between text-xs">
            <span class="text-gray-500">Subtotal</span>
            <span class="font-bold text-gray-900">$2347</span>
          </div>
          <div class="flex justify-between text-xs">
            <span class="text-gray-500">Estimated Tax</span>
            <span class="font-bold text-gray-900">$50</span>
          </div>
          <div class="flex justify-between text-xs">
            <span class="text-gray-500">Estimated shipping & Handling</span>
            <span class="font-bold text-gray-900">$29</span>
          </div>
          <div class="flex justify-between text-sm pt-3 border-t border-gray-200">
            <span class="font-bold text-gray-900">Total</span>
            <span class="font-bold text-gray-900">$2426</span>
          </div>
        </div>

      </div>

      <!-- ===== RIGHT: PAYMENT ===== -->
      <div>

        <h2 class="text-xl font-bold text-gray-900 mb-6">Payment</h2>

        <div class="flex items-center gap-8 border-b border-gray-200 mb-6">
          <button class="pb-3 text-sm font-bold text-gray-900 border-b-2 border-gray-900">Credit Card</button>
          <button class="pb-3 text-sm text-gray-400 hover:text-gray-900 transition">PayPal</button>
          <button class="pb-3 text-sm text-gray-400 hover:text-gray-900 transition">PayPal Credit</button>
        </div>

        <!-- Card Preview -->
        <div class="w-full max-w-[512px] h-[240px] rounded-xl bg-[#1a1a1a] p-6 flex flex-col justify-between mb-6 relative overflow-hidden">

          <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute -top-10 -right-10 w-40 h-[300px] bg-white rotate-45"></div>
            <div class="absolute -top-10 right-20 w-20 h-[300px] bg-white rotate-45"></div>
          </div>

          <div class="relative flex items-center justify-between">
            <div class="w-10 h-7 rounded bg-yellow-400/90"></div>
            <svg class="w-5 h-5 text-gray-400 rotate-90" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M5 12.55a11 11 0 0114.08 0"/>
              <path d="M1.42 9a16 16 0 0121.16 0"/>
              <path d="M8.53 16.11a6 6 0 016.95 0"/>
              <line x1="12" y1="20" x2="12.01" y2="20"/>
            </svg>
          </div>

          <div class="relative flex items-center gap-6 text-white text-base font-mono tracking-wider">
            <span>4085</span><span>9536</span><span>8475</span><span>9530</span>
          </div>

          <div class="relative flex items-end justify-between">
            <div>
              <p class="text-[10px] text-gray-400 mb-1">Cardholder</p>
              <p class="text-xs font-bold text-white">Cardholder</p>
            </div>
            <div class="flex items-center -space-x-3">
              <div class="w-7 h-7 rounded-full bg-red-500"></div>
              <div class="w-7 h-7 rounded-full bg-yellow-500"></div>
            </div>
          </div>

        </div>

        <!-- Form -->
        <div class="space-y-4 max-w-[512px]">
          <input type="text" placeholder="Cardholder Name" class="w-full border border-gray-200 rounded-md px-4 py-3.5 text-sm outline-none focus:border-gray-400 transition" />
          <input type="text" placeholder="Card Number" class="w-full border border-gray-200 rounded-md px-4 py-3.5 text-sm outline-none focus:border-gray-400 transition" />
          <div class="grid grid-cols-2 gap-4">
            <input type="text" placeholder="Exp.Date" class="w-full border border-gray-200 rounded-md px-4 py-3.5 text-sm outline-none focus:border-gray-400 transition" />
            <input type="text" placeholder="CVV" class="w-full border border-gray-200 rounded-md px-4 py-3.5 text-sm outline-none focus:border-gray-400 transition" />
          </div>
          <label class="flex items-center gap-2 cursor-pointer pt-2">
            <input type="checkbox" class="w-4 h-4 accent-gray-900" />
            <span class="text-xs font-bold text-gray-900">Same as billing address</span>
          </label>
        </div>

      </div>

    </div>


    <!-- ============================================ -->
    <!-- ===== BUTTONS (Mobile + Desktop) ===== -->
    <!-- ============================================ -->
    <div class="flex items-center gap-3 lg:grid lg:grid-cols-2 lg:gap-4 pt-6 lg:pt-8 mt-6 lg:mt-8 border-t border-gray-100 max-w-[400px] lg:max-w-[512px] lg:ml-auto">
      <a href="checkout_shipping.php" class="flex-1 border border-gray-300 text-gray-700 text-sm font-medium py-3 lg:py-3.5 rounded-md hover:border-gray-900 transition text-center">
        Back
      </a>
      <a href="order_success.php" class="flex-1 bg-[#1a1a1a] text-white text-sm font-bold py-3 lg:py-3.5 rounded-md hover:bg-black transition text-center">
        Pay
      </a>
    </div>

  </div>
</main>

<?php include 'includes/overall/footer.php'; ?>