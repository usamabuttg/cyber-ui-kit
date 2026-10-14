<?php
$page_title = "Checkout - Address - 7cyber";
include 'includes/overall/header.php';
?>

<main class="w-full bg-white">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px] py-10">

    <!-- ===== STEPS ===== -->
    <div class="flex items-center w-full mb-14">

      <!-- Step 1: Address (Active) -->
      <div class="flex items-center gap-3 shrink-0">
        <div class="w-9 h-9 rounded-full border-2 border-[#1a1a1a] flex items-center justify-center shrink-0">
          <div class="w-3 h-3 rounded-full bg-[#1a1a1a]"></div>
        </div>
        <div class="leading-tight">
          <p class="text-[10px] text-gray-500">Step 1</p>
          <p class="text-sm font-bold text-gray-900">Address</p>
        </div>
      </div>

      <div class="flex-1 border-t border-dashed border-gray-300 mx-4"></div>

      <!-- Step 2: Shipping (Inactive) -->
      <div class="flex items-center gap-3 opacity-50 shrink-0">
        <div class="w-9 h-9 rounded-full bg-gray-300 flex items-center justify-center shrink-0">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
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

      <div class="flex-1 border-t border-dashed border-gray-300 mx-4"></div>

      <!-- Step 3: Payment (Inactive) -->
      <div class="flex items-center gap-3 opacity-50 shrink-0">
        <div class="w-9 h-9 rounded-full bg-gray-300 flex items-center justify-center shrink-0">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="4"/>
            <path d="M4 21c0-4 4-6 8-6s8 2 8 6"/>
          </svg>
        </div>
        <div class="leading-tight">
          <p class="text-[10px] text-gray-400">Step 3</p>
          <p class="text-sm font-medium text-gray-400">Payment</p>
        </div>
      </div>

    </div>

    <!-- ===== SELECT ADDRESS ===== -->
    <div class="mb-8">

      <h2 class="text-base font-bold text-gray-900 mb-5">Select Address</h2>

      <!-- Address 1 (Selected) -->
      <div class="bg-[#f5f5f5] rounded-lg p-5 mb-5">
        <div class="flex items-start gap-3">

          <div class="w-5 h-5 rounded-full border-2 border-gray-900 flex items-center justify-center shrink-0 mt-0.5">
            <div class="w-2.5 h-2.5 rounded-full bg-gray-900"></div>
          </div>

          <div class="flex-1">
            <div class="flex items-center gap-2 mb-2">
              <p class="text-sm font-bold text-gray-900">2118 Thornridge</p>
              <span class="bg-[#1a1a1a] text-white text-[9px] font-bold px-2 py-0.5 rounded">HOME</span>
            </div>
            <p class="text-xs text-gray-600 leading-relaxed">2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
            <p class="text-xs text-gray-600 mt-1">(308) 555-0121</p>
          </div>

          <div class="flex items-center gap-3 shrink-0">
            <button class="text-gray-700 hover:text-gray-900 transition">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path d="M12 20h9"/>
                <path d="M16.5 3.5a2.12 2.12 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>
              </svg>
            </button>
            <button class="text-gray-700 hover:text-red-500 transition">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>

        </div>
      </div>

      <!-- Address 2 -->
      <div class="bg-[#f5f5f5] rounded-lg p-5 mb-5">
        <div class="flex items-start gap-3">

          <div class="w-5 h-5 rounded-full border-2 border-gray-300 flex items-center justify-center shrink-0 mt-0.5">
          </div>

          <div class="flex-1">
            <div class="flex items-center gap-2 mb-2">
              <p class="text-sm font-bold text-gray-900">Headoffice</p>
              <span class="bg-[#1a1a1a] text-white text-[9px] font-bold px-2 py-0.5 rounded">WORK</span>
            </div>
            <p class="text-xs text-gray-600 leading-relaxed">2118 Abc St, Los Angeles, California 90210</p>
            <p class="text-xs text-gray-600 mt-1">(208) 555-0112</p>
          </div>

          <div class="flex items-center gap-3 shrink-0">
            <button class="text-gray-700 hover:text-gray-900 transition">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path d="M12 20h9"/>
                <path d="M16.5 3.5a2.12 2.12 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>
              </svg>
            </button>
            <button class="text-gray-700 hover:text-red-500 transition">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>

        </div>
      </div>

    </div>

    <!-- ===== ADD NEW ADDRESS ===== -->
    <div class="flex justify-center py-6 border-t border-dashed border-gray-300 mb-8">
      <button class="flex items-center gap-2 group">
        <div class="w-7 h-7 rounded-full bg-[#1a1a1a] flex items-center justify-center text-white group-hover:bg-black transition">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
          </svg>
        </div>
        <span class="text-sm font-bold text-gray-900">Add New Address</span>
      </button>
    </div>

    <!-- ===== BUTTONS (Back + Next - Right Side) ===== -->
    <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-100">
      <a href="cart.php" class="border border-gray-300 text-gray-700 text-sm font-bold px-12 py-3 rounded-md hover:border-gray-900 transition inline-block text-center">
        Back
      </a>
      <a href="checkout_shipping.php" class="bg-[#1a1a1a] text-white text-sm font-bold px-12 py-3 rounded-md hover:bg-black transition inline-block text-center">
        Next
      </a>
    </div>

  </div>
</main>

<?php include 'includes/overall/footer.php'; ?>