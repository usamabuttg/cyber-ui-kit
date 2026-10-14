<?php
$page_title = "Checkout - Shipping - 7cyber";
include 'includes/overall/header.php';
?>

<main class="w-full bg-white overflow-x-hidden">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px] py-6 lg:py-10">

    <!-- ===== STEPS ===== -->
    <div class="flex items-center w-full mb-8 lg:mb-14">

      <!-- Step 2: Shipping (Active) -->
      <div class="flex items-center gap-2 lg:gap-3 shrink-0">
        <div class="w-7 h-7 lg:w-9 lg:h-9 rounded-full border-2 border-[#1a1a1a] flex items-center justify-center shrink-0">
          <div class="w-2.5 h-2.5 lg:w-3 lg:h-3 rounded-full bg-[#1a1a1a]"></div>
        </div>
        <div class="leading-tight">
          <p class="text-[10px] text-gray-500">Step 2</p>
          <p class="text-sm font-bold text-gray-900">Shipping</p>
        </div>
      </div>

      <div class="flex-1 border-t border-dashed border-gray-300 mx-3 lg:mx-4"></div>

      <!-- Step 3: Payment (Inactive) -->
      <div class="flex items-center gap-2 lg:gap-3 opacity-50 shrink-0">
        <div class="w-7 h-7 lg:w-9 lg:h-9 rounded-full bg-gray-300 flex items-center justify-center shrink-0">
          <svg class="w-3.5 h-3.5 lg:w-4 lg:h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect x="2" y="6" width="20" height="12" rx="2"/><path d="M2 10h20"/>
          </svg>
        </div>
        <div class="leading-tight">
          <p class="text-[10px] text-gray-400">Step 3</p>
          <p class="text-sm font-medium text-gray-400">Payment</p>
        </div>
      </div>

    </div>

    <!-- ===== SHIPMENT METHOD ===== -->
    <div class="mb-6 lg:mb-10">

      <h2 class="text-base font-bold text-gray-900 mb-5">Shipment Method</h2>

      <!-- Option 1: Free (Selected) -->
      <label class="flex items-start gap-3 border border-gray-900 rounded-lg px-4 py-4 lg:px-5 lg:py-5 mb-3 cursor-pointer">
        <input type="radio" name="shipping" checked class="w-4 h-4 accent-gray-900 mt-1 shrink-0" />
        <div class="flex-1 min-w-0">
          <div class="flex items-center justify-between gap-2 mb-2">
            <span class="text-sm font-bold text-gray-900">Free</span>
            <span class="text-xs text-gray-500 whitespace-nowrap">17 Oct, 2023</span>
          </div>
          <p class="text-sm text-gray-500">Regular shipment</p>
        </div>
      </label>

      <!-- Option 2: $8.50 -->
      <label class="flex items-start gap-3 border border-gray-200 rounded-lg px-4 py-4 lg:px-5 lg:py-5 mb-3 cursor-pointer hover:border-gray-400 transition">
        <input type="radio" name="shipping" class="w-4 h-4 accent-gray-900 mt-1 shrink-0" />
        <div class="flex-1 min-w-0">
          <div class="flex items-center justify-between gap-2 mb-2">
            <span class="text-sm font-bold text-gray-500">$8.50</span>
            <span class="text-xs text-gray-500 whitespace-nowrap">1 Oct, 2023</span>
          </div>
          <p class="text-sm text-gray-500">Get your delivery as soon as possible</p>
        </div>
      </label>

      <!-- Option 3: Schedule -->
      <label class="flex items-start gap-3 border border-gray-200 rounded-lg px-4 py-4 lg:px-5 lg:py-5 mb-3 cursor-pointer hover:border-gray-400 transition">
        <input type="radio" name="shipping" class="w-4 h-4 accent-gray-900 mt-1 shrink-0" />
        <div class="flex-1 min-w-0">
          <div class="flex items-center justify-between gap-2 mb-2">
            <span class="text-sm font-bold text-gray-500">Schedule</span>
            <span class="text-xs text-gray-500 flex items-center gap-1 whitespace-nowrap">
              Select Date
              <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
              </svg>
            </span>
          </div>
          <p class="text-sm text-gray-500">Pick a date when you want to get your delivery</p>
        </div>
      </label>

    </div>

    <!-- ===== BUTTONS ===== -->
    <div class="flex items-center gap-3 pt-5 border-t border-gray-100">
      <a href="checkout.php" class="flex-1 border border-gray-300 text-gray-700 text-sm font-bold py-3 rounded-md hover:border-gray-900 transition text-center">
        Back
      </a>
      <a href="checkout_payment.php" class="flex-1 bg-[#1a1a1a] text-white text-sm font-bold py-3 rounded-md hover:bg-black transition text-center">
        Next
      </a>
    </div>

  </div>
</main>

<?php include 'includes/overall/footer.php'; ?>