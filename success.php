<?php
$page_title = "Order Success - 7cyber";
include 'includes/overall/header.php';
?>

<!-- ===== MAIN CONTENT ===== -->
<main class="w-full bg-white">
  <div class="max-w-[1440px] mx-auto px-4 lg:px-6 py-16 lg:py-24">

    <div class="max-w-2xl mx-auto text-center">

      <!-- Success Icon -->
      <div class="w-24 h-24 lg:w-32 lg:h-32 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-8">
        <svg class="w-14 h-14 lg:w-20 lg:h-20 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
      </div>

      <!-- Heading -->
      <h1 class="text-2xl lg:text-4xl font-bold text-gray-900 mb-4">
        Thank You for Your Order!
      </h1>

      <p class="text-sm lg:text-base text-gray-500 leading-relaxed mb-8">
        Your order has been placed successfully. We'll send you a confirmation email with the order details shortly.
      </p>

      <!-- Order Info Card -->
      <div class="bg-[#fafafa] border border-gray-100 rounded-lg p-6 lg:p-8 mb-8">

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

          <!-- Order Number -->
          <div class="text-center">
            <p class="text-xs text-gray-400 mb-1">Order Number</p>
            <p class="text-sm lg:text-base font-semibold text-gray-900">#7C-2026-001</p>
          </div>

          <!-- Date -->
          <div class="text-center">
            <p class="text-xs text-gray-400 mb-1">Order Date</p>
            <p class="text-sm lg:text-base font-semibold text-gray-900">06 Oct, 2026</p>
          </div>

          <!-- Total -->
          <div class="text-center">
            <p class="text-xs text-gray-400 mb-1">Total Amount</p>
            <p class="text-sm lg:text-base font-semibold text-gray-900">$2426</p>
          </div>

        </div>

      </div>

      <!-- Delivery Note -->
      <div class="bg-blue-50 border border-blue-100 rounded-lg p-5 mb-8 text-left">
        <p class="text-xs lg:text-sm text-blue-900 leading-relaxed">
          📦 <strong>Estimated delivery:</strong> 17 Oct, 2026 &nbsp;·&nbsp; Your items will be shipped to the address you provided.
        </p>
      </div>

      <!-- Buttons -->
      <div class="flex flex-col sm:flex-row items-center justify-center gap-3">

        <a href="index.php" class="w-full sm:w-auto px-8 lg:px-12 py-3 border border-gray-300 text-gray-700 text-sm font-medium rounded-md hover:border-gray-900 transition">
          Back to Home
        </a>

        <a href="category.php" class="w-full sm:w-auto px-8 lg:px-12 py-3 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-black transition">
          Continue Shopping
        </a>

      </div>

    </div>

  </div>
</main>

<?php include 'includes/overall/footer.php'; ?>