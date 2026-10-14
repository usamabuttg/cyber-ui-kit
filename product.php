<?php
// ===== URL SE PRODUCT ID LAO =====
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

include 'core/init.php';

// ===== DATABASE SE PRODUCT LAO =====
$query = "SELECT * FROM products WHERE id = $product_id LIMIT 1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
    header('Location: category.php');
    exit;
}

$product = mysqli_fetch_assoc($result);

$page_title = $product['name'] . " - 7cyber";
include 'includes/overall/header.php';
?>

<main class="w-full bg-white">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px] py-4 lg:py-8">

    <!-- ===== BREADCRUMB ===== -->
    <div class="flex items-center gap-2 text-xs lg:text-sm text-gray-500 mb-4 lg:mb-8 flex-wrap">
      <a href="index.php" class="hover:text-gray-900 transition">Home</a>
      <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
      </svg>
      <a href="category.php" class="hover:text-gray-900 transition">Catalog</a>
      <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
      </svg>
      <a href="category.php" class="hover:text-gray-900 transition">Smartphones</a>
      <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
      </svg>
      <a href="#" class="hover:text-gray-900 transition"><?php echo $product['brand']; ?></a>
      <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
      </svg>
      <span class="text-gray-900 font-bold truncate"><?php echo $product['name']; ?></span>
    </div>

    <!-- ============================================ -->
    <!-- ===== MOBILE VIEW (Separate Section) ===== -->
    <!-- ============================================ -->
    <div class="lg:hidden mb-8">

      <!-- ===== IMAGE GALLERY ===== -->
      <div class="mb-5">
        <div class="bg-[#fafafa] rounded-lg flex items-center justify-center p-4 h-[340px] overflow-hidden mb-3">
          <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="max-h-full max-w-full object-contain" />
        </div>
        <div class="flex items-center gap-2 overflow-x-auto">
          <button class="w-16 h-16 border-2 border-gray-900 rounded-lg p-1 bg-[#fafafa] shrink-0">
            <img src="images/iphone-thumb-1.png" alt="" class="w-full h-full object-contain" />
          </button>
          <button class="w-16 h-16 border border-gray-200 rounded-lg p-1 bg-[#fafafa] shrink-0">
            <img src="images/iphone-thumb-2.png" alt="" class="w-full h-full object-contain" />
          </button>
          <button class="w-16 h-16 border border-gray-200 rounded-lg p-1 bg-[#fafafa] shrink-0">
            <img src="images/iphone-thumb-3.png" alt="" class="w-full h-full object-contain" />
          </button>
          <button class="w-16 h-16 border border-gray-200 rounded-lg p-1 bg-[#fafafa] shrink-0">
            <img src="images/iphone-thumb-4.png" alt="" class="w-full h-full object-contain" />
          </button>
        </div>
      </div>

      <!-- ===== PRODUCT INFO ===== -->
      <div class="space-y-4 mb-8">

        <h1 class="text-xl font-bold text-gray-900 leading-snug">
          <?php echo $product['name']; ?>
        </h1>

        <div class="flex items-baseline gap-3">
          <span class="text-2xl font-bold text-gray-900">
            $<?php echo number_format($product['price'], 0); ?>
          </span>
          <?php if (isset($product['old_price']) && $product['old_price']): ?>
            <span class="text-sm text-gray-400 line-through">
              $<?php echo number_format($product['old_price'], 0); ?>
            </span>
          <?php endif; ?>
        </div>

        <div class="flex items-center gap-3 flex-wrap">
          <p class="text-xs text-gray-700 whitespace-nowrap">Select color :</p>
          <div class="flex items-center gap-2">
            <button class="w-6 h-6 rounded-full bg-black border-2 border-gray-900 ring-2 ring-offset-2 ring-gray-900"></button>
            <button class="w-6 h-6 rounded-full bg-[#7c3aed] border border-gray-300"></button>
            <button class="w-6 h-6 rounded-full bg-[#dc2626] border border-gray-300"></button>
            <button class="w-6 h-6 rounded-full bg-[#eab308] border border-gray-300"></button>
            <button class="w-6 h-6 rounded-full bg-[#e5e5e5] border border-gray-300"></button>
          </div>
        </div>

        <div class="grid grid-cols-4 gap-2">
          <button class="py-2 text-xs border border-gray-300 rounded-md text-gray-600">128GB</button>
          <button class="py-2 text-xs border border-gray-300 rounded-md text-gray-600">256GB</button>
          <button class="py-2 text-xs border border-gray-300 rounded-md text-gray-600">512GB</button>
          <button class="py-2 text-xs border-2 border-gray-900 rounded-md font-bold text-gray-900">1TB</button>
        </div>

        <!-- Features (2 cols) -->
        <div class="grid grid-cols-2 gap-2">
          <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
            <div class="flex items-center gap-1.5 text-gray-500">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/></svg>
              <span class="text-[9px] font-medium">Screen size</span>
            </div>
            <p class="text-xs font-bold text-gray-900">6.7"</p>
          </div>
          <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
            <div class="flex items-center gap-1.5 text-gray-500">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/></svg>
              <span class="text-[9px] font-medium">CPU</span>
            </div>
            <p class="text-xs font-bold text-gray-900">Apple A16 Bionic</p>
          </div>
          <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
            <div class="flex items-center gap-1.5 text-gray-500">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3"/></svg>
              <span class="text-[9px] font-medium">Number of Cores</span>
            </div>
            <p class="text-xs font-bold text-gray-900">6</p>
          </div>
          <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
            <div class="flex items-center gap-1.5 text-gray-500">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 8a2 2 0 012-2h2l1.5-2h7L17 6h2a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/><circle cx="12" cy="13" r="3"/></svg>
              <span class="text-[9px] font-medium">Main camera</span>
            </div>
            <p class="text-xs font-bold text-gray-900">48-12-12 MP</p>
          </div>
          <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
            <div class="flex items-center gap-1.5 text-gray-500">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/></svg>
              <span class="text-[9px] font-medium">Front camera</span>
            </div>
            <p class="text-xs font-bold text-gray-900">12 MP</p>
          </div>
          <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
            <div class="flex items-center gap-1.5 text-gray-500">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="2" y="7" width="18" height="10" rx="2"/><path d="M22 11v2"/></svg>
              <span class="text-[9px] font-medium">Battery capacity</span>
            </div>
            <p class="text-xs font-bold text-gray-900">4323 mAh</p>
          </div>
        </div>

        <p class="text-xs text-gray-500 leading-relaxed">
          Enhanced capabilities thanks to an enlarged display of 6.7 inches and work without recharging throughout the day. Incredible photos in weak, yes and in bright light using the new system with two cameras more...
        </p>

        <div class="grid grid-cols-2 gap-3 pt-1">
          <button class="border border-gray-900 text-gray-900 font-bold py-3 rounded-md text-xs">Add to Wishlist</button>
          <a href="cart.php?id=<?php echo $product['id']; ?>" class="bg-[#1a1a1a] text-white font-bold py-3 rounded-md text-center text-xs">Add to Card</a>
        </div>

        <!-- Trust Badges -->
        <div class="grid grid-cols-3 gap-2 pt-3 border-t border-gray-200">
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-gray-700 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M1 3h15v13H1z"/><path d="M16 8h4l3 3v5h-7z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
            <div class="leading-tight">
              <p class="text-[10px] font-bold text-gray-700">Free Delivery</p>
              <p class="text-[10px] text-gray-500">1-2 day</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-gray-700 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg>
            <div class="leading-tight">
              <p class="text-[10px] font-bold text-gray-700">In Stock</p>
              <p class="text-[10px] text-gray-500">Today</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-gray-700 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c1.66 0 3.22.45 4.56 1.24"/></svg>
            <div class="leading-tight">
              <p class="text-[10px] font-bold text-gray-700">Guaranteed</p>
              <p class="text-[10px] text-gray-500">1 year</p>
            </div>
          </div>
        </div>

      </div>

      <!-- ===== DETAILS (Mobile) ===== -->
      <div class="mb-8 pt-6 border-t border-gray-200">
        <h2 class="text-base font-bold text-gray-900 mb-4">Details</h2>
        <p class="text-xs text-gray-500 leading-relaxed mb-5">
          Just as a book is judged by its cover, the first thing you notice when you pick up a modern smartphone is the display. Nothing surprising, because advanced technologies allow you to practically level the display frames and cutouts for the front camera and speaker.
        </p>

        <div class="mb-6">
          <h3 class="text-sm font-bold text-gray-900 mb-3">Screen</h3>
          <div class="space-y-0">
            <div class="flex justify-between items-center py-2.5 border-b border-gray-100">
              <span class="text-xs text-gray-500">Screen diagonal</span>
              <span class="text-xs font-medium text-gray-900">6.7"</span>
            </div>
            <div class="flex justify-between items-center py-2.5 border-b border-gray-100">
              <span class="text-xs text-gray-500">The screen resolution</span>
              <span class="text-xs font-medium text-gray-900">2796x1290</span>
            </div>
            <div class="flex justify-between items-center py-2.5 border-b border-gray-100">
              <span class="text-xs text-gray-500">The screen refresh rate</span>
              <span class="text-xs font-medium text-gray-900">120 Hz</span>
            </div>
            <div class="flex justify-between items-center py-2.5 border-b border-gray-100">
              <span class="text-xs text-gray-500">The pixel density</span>
              <span class="text-xs font-medium text-gray-900">460 ppi</span>
            </div>
            <div class="flex justify-between items-center py-2.5 border-b border-gray-100">
              <span class="text-xs text-gray-500">Screen type</span>
              <span class="text-xs font-medium text-gray-900">OLED</span>
            </div>
            <div class="flex justify-between items-start py-2.5 border-b border-gray-100">
              <span class="text-xs text-gray-500">Additionally</span>
              <div class="text-right">
                <p class="text-xs font-medium text-gray-900 leading-relaxed">Dynamic Island</p>
                <p class="text-xs font-medium text-gray-900 leading-relaxed">Always-On display</p>
                <p class="text-xs font-medium text-gray-900 leading-relaxed">HDR display</p>
                <p class="text-xs font-medium text-gray-900 leading-relaxed">True Tone</p>
                <p class="text-xs font-medium text-gray-900 leading-relaxed">Wide color (P3)</p>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-6">
          <h3 class="text-sm font-bold text-gray-900 mb-3">CPU</h3>
          <div class="space-y-0">
            <div class="flex justify-between items-center py-2.5 border-b border-gray-100">
              <span class="text-xs text-gray-500">CPU</span>
              <span class="text-xs font-medium text-gray-900">A16 Bionic</span>
            </div>
            <div class="flex justify-between items-center py-2.5 border-b border-gray-100">
              <span class="text-xs text-gray-500">Number of cores</span>
              <span class="text-xs font-medium text-gray-900">6</span>
            </div>
          </div>
        </div>

        <div class="flex justify-center">
          <button class="inline-flex items-center gap-2 border border-gray-300 text-gray-700 text-xs font-medium px-6 py-2.5 rounded-md">
            View More
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
          </button>
        </div>
      </div>

      <!-- ===== REVIEWS (Mobile) ===== -->
      <div class="mb-8 pt-6 border-t border-gray-200">
        <h2 class="text-base font-bold text-gray-900 mb-4">Reviews</h2>

        <div class="bg-[#fafafa] rounded-xl p-5 flex flex-col items-center text-center mb-5">
          <div class="text-4xl font-bold text-gray-900 mb-1">4.8</div>
          <p class="text-xs text-gray-400 mb-2">of 125 reviews</p>
          <div class="flex items-center gap-0.5">
            <?php for ($i = 1; $i <= 5; $i++): ?>
              <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <?php endfor; ?>
          </div>
        </div>

        <div class="space-y-2 mb-6">
          <div class="flex items-center gap-3">
            <span class="text-xs text-gray-700 w-20 shrink-0">Excellent</span>
            <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 100%"></div></div>
            <span class="text-xs text-gray-400 w-8 text-right">100</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="text-xs text-gray-700 w-20 shrink-0">Good</span>
            <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 11%"></div></div>
            <span class="text-xs text-gray-400 w-8 text-right">11</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="text-xs text-gray-700 w-20 shrink-0">Average</span>
            <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 3%"></div></div>
            <span class="text-xs text-gray-400 w-8 text-right">3</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="text-xs text-gray-700 w-20 shrink-0">Below Average</span>
            <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 8%"></div></div>
            <span class="text-xs text-gray-400 w-8 text-right">8</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="text-xs text-gray-700 w-20 shrink-0">Poor</span>
            <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 1%"></div></div>
            <span class="text-xs text-gray-400 w-8 text-right">1</span>
          </div>
        </div>

        <!-- Review 1 -->
        <div class="pb-5 mb-5 border-b border-gray-100">
          <div class="flex items-start gap-3">
            <img src="images/reviewer-1.png" alt="Grace Carey" class="w-9 h-9 rounded-full object-cover shrink-0" />
            <div class="flex-1 min-w-0">
              <div class="flex items-center justify-between mb-1 flex-wrap gap-1">
                <h4 class="text-xs font-bold text-gray-900">Grace Carey</h4>
                <span class="text-[10px] text-gray-400">24 Jan, 2023</span>
              </div>
              <div class="flex items-center gap-0.5 mb-2">
                <?php for ($i = 0; $i < 5; $i++): ?>
                  <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php endfor; ?>
              </div>
              <p class="text-xs text-gray-600 leading-relaxed">I was a bit nervous to be buying a secondhand phone from Amazon, but I couldn't be happier with my purchase!!</p>
            </div>
          </div>
        </div>

        <!-- Review 2 -->
        <div class="pb-5 mb-5 border-b border-gray-100">
          <div class="flex items-start gap-3">
            <img src="images/reviewer-2.png" alt="Ronald Richards" class="w-9 h-9 rounded-full object-cover shrink-0" />
            <div class="flex-1 min-w-0">
              <div class="flex items-center justify-between mb-1 flex-wrap gap-1">
                <h4 class="text-xs font-bold text-gray-900">Ronald Richards</h4>
                <span class="text-[10px] text-gray-400">24 Jan, 2023</span>
              </div>
              <div class="flex items-center gap-0.5 mb-2">
                <?php for ($i = 0; $i < 5; $i++): ?>
                  <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php endfor; ?>
              </div>
              <p class="text-xs text-gray-600 leading-relaxed">This phone has 1T storage and is durable. Plus all the new iPhones have a C port!</p>
            </div>
          </div>
        </div>

        <!-- Review 3 (with images) -->
        <div class="pb-5 mb-5 border-b border-gray-100">
          <div class="flex items-start gap-3">
            <img src="images/reviewer-3.png" alt="Darcy King" class="w-9 h-9 rounded-full object-cover shrink-0" />
            <div class="flex-1 min-w-0">
              <div class="flex items-center justify-between mb-1 flex-wrap gap-1">
                <h4 class="text-xs font-bold text-gray-900">Darcy King</h4>
                <span class="text-[10px] text-gray-400">24 Jan, 2023</span>
              </div>
              <div class="flex items-center gap-0.5 mb-2">
                <?php for ($i = 0; $i < 3; $i++): ?>
                  <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php endfor; ?>
              </div>
              <p class="text-xs text-gray-600 leading-relaxed mb-3">I might be the only one to say this but the camera is a little funky.</p>
              <div class="flex items-center gap-2">
                <img src="images/review-image-1.png" alt="" class="w-14 h-14 object-cover rounded-lg" />
                <img src="images/review-image-2.png" alt="" class="w-14 h-14 object-cover rounded-lg" />
              </div>
            </div>
          </div>
        </div>

        <div class="flex justify-center">
          <button class="inline-flex items-center gap-2 border border-gray-300 text-gray-700 text-xs font-medium px-6 py-2.5 rounded-md">
            View More
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
          </button>
        </div>
      </div>

      <!-- ===== RELATED PRODUCTS (Mobile) ===== -->
      <div class="pt-6 border-t border-gray-200">
        <h2 class="text-base font-bold text-gray-900 mb-4">Related Products</h2>
        <div class="grid grid-cols-2 gap-3">

          <div class="relative bg-[#f5f5f5] rounded-lg p-3 flex flex-col">
            <button class="absolute top-2.5 right-2.5 text-gray-400">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
            </button>
            <div class="h-24 flex items-center justify-center mb-3 mt-2">
              <img src="images/iphone1.png" alt="iPhone 14 Pro 512GB Gold" class="max-h-full object-contain" />
            </div>
            <p class="text-xs font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">Apple iPhone 14 Pro 512GB Gold</p>
            <p class="text-base font-bold text-gray-900 mb-3 text-center">$1437</p>
            <a href="product.php?id=1" class="w-full bg-[#1a1a1a] text-white text-xs font-bold py-2 rounded-md text-center block">Buy Now</a>
          </div>

          <div class="relative bg-[#f5f5f5] rounded-lg p-3 flex flex-col">
            <button class="absolute top-2.5 right-2.5 text-gray-400">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
            </button>
            <div class="h-24 flex items-center justify-center mb-3 mt-2">
              <img src="images/airpods2.png" alt="AirPods Max Silver" class="max-h-full object-contain" />
            </div>
            <p class="text-xs font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">AirPods Max Silver</p>
            <p class="text-base font-bold text-gray-900 mb-3 text-center">$549</p>
            <a href="product.php?id=2" class="w-full bg-[#1a1a1a] text-white text-xs font-bold py-2 rounded-md text-center block">Buy Now</a>
          </div>

          <div class="relative bg-[#f5f5f5] rounded-lg p-3 flex flex-col">
            <button class="absolute top-2.5 right-2.5 text-gray-400">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
            </button>
            <div class="h-24 flex items-center justify-center mb-3 mt-2">
              <img src="images/Applewatch.png" alt="Apple Watch Series 9" class="max-h-full object-contain" />
            </div>
            <p class="text-xs font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">Apple Watch Series 9 GPS 41mm</p>
            <p class="text-base font-bold text-gray-900 mb-3 text-center">$399</p>
            <a href="product.php?id=3" class="w-full bg-[#1a1a1a] text-white text-xs font-bold py-2 rounded-md text-center block">Buy Now</a>
          </div>

          <div class="relative bg-[#f5f5f5] rounded-lg p-3 flex flex-col">
            <button class="absolute top-2.5 right-2.5 text-gray-400">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
            </button>
            <div class="h-24 flex items-center justify-center mb-3 mt-2">
              <img src="images/appleiphone4.png" alt="iPhone 14 Pro 1TB Gold" class="max-h-full object-contain" />
            </div>
            <p class="text-xs font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">Apple iPhone 14 Pro 1TB Gold</p>
            <p class="text-base font-bold text-gray-900 mb-3 text-center">$1499</p>
            <a href="product.php?id=4" class="w-full bg-[#1a1a1a] text-white text-xs font-bold py-2 rounded-md text-center block">Buy Now</a>
          </div>

        </div>
      </div>

    </div>


    <!-- ============================================ -->
    <!-- ===== DESKTOP VIEW (Purana) ===== -->
    <!-- ============================================ -->
    <div class="hidden lg:block">

      <!-- ===== PRODUCT DETAIL ===== -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 mb-16">

        <!-- LEFT: Image Gallery -->
        <div class="flex gap-4">
          <div class="flex flex-col gap-3 shrink-0">
            <button class="w-[88px] h-[88px] border-2 border-gray-900 rounded-lg p-2 bg-white">
              <img src="images/iphone-thumb-1.png" alt="" class="w-full h-full object-contain" />
            </button>
            <button class="w-[88px] h-[88px] border border-gray-200 rounded-lg p-2 bg-white hover:border-gray-400 transition">
              <img src="images/iphone-thumb-2.png" alt="" class="w-full h-full object-contain" />
            </button>
            <button class="w-[88px] h-[88px] border border-gray-200 rounded-lg p-2 bg-white hover:border-gray-400 transition">
              <img src="images/iphone-thumb-3.png" alt="" class="w-full h-full object-contain" />
            </button>
            <button class="w-[88px] h-[88px] border border-gray-200 rounded-lg p-2 bg-white hover:border-gray-400 transition">
              <img src="images/iphone-thumb-4.png" alt="" class="w-full h-full object-contain" />
            </button>
          </div>
          <div class="w-full max-w-[536px] h-[516px] bg-white border border-gray-100 rounded-lg flex items-center justify-center p-6 overflow-hidden">
            <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-full h-full object-contain" />
          </div>
        </div>

        <!-- RIGHT: Product Info -->
        <div class="space-y-5">

          <h1 class="text-3xl font-bold text-gray-900 leading-snug">
            <?php echo $product['name']; ?>
          </h1>

          <div class="flex items-baseline gap-3">
            <span class="text-4xl font-medium text-gray-900">
              $<?php echo number_format($product['price'], 0); ?>
            </span>
            <?php if (isset($product['old_price']) && $product['old_price']): ?>
              <span class="text-base text-gray-400 line-through">
                $<?php echo number_format($product['old_price'], 0); ?>
              </span>
            <?php endif; ?>
          </div>

          <div class="flex items-center gap-3">
            <p class="text-sm text-gray-700 whitespace-nowrap">Select color :</p>
            <div class="flex items-center gap-3">
              <button class="w-8 h-8 rounded-full bg-black border-2 border-gray-900 ring-2 ring-offset-2 ring-gray-900"></button>
              <button class="w-8 h-8 rounded-full bg-[#7c3aed] border border-gray-300 hover:border-gray-500 transition"></button>
              <button class="w-8 h-8 rounded-full bg-[#dc2626] border border-gray-300 hover:border-gray-500 transition"></button>
              <button class="w-8 h-8 rounded-full bg-[#eab308] border border-gray-300 hover:border-gray-500 transition"></button>
              <button class="w-8 h-8 rounded-full bg-[#e5e5e5] border border-gray-300 hover:border-gray-500 transition"></button>
            </div>
          </div>

          <div class="grid grid-cols-4 gap-2">
            <button class="py-2.5 text-xs border border-gray-300 rounded-md text-gray-600 hover:border-gray-900 transition">128GB</button>
            <button class="py-2.5 text-xs border border-gray-300 rounded-md text-gray-600 hover:border-gray-900 transition">256GB</button>
            <button class="py-2.5 text-xs border border-gray-300 rounded-md text-gray-600 hover:border-gray-900 transition">512GB</button>
            <button class="py-2.5 text-xs border-2 border-gray-900 rounded-md font-bold text-gray-900">1TB</button>
          </div>

          <div class="grid grid-cols-3 gap-2">
            <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
              <div class="flex items-center gap-1.5 text-gray-500">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/></svg>
                <span class="text-[9px] font-medium">Screen size</span>
              </div>
              <p class="text-xs font-bold text-gray-900">6.7"</p>
            </div>
            <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
              <div class="flex items-center gap-1.5 text-gray-500">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/></svg>
                <span class="text-[9px] font-medium">CPU</span>
              </div>
              <p class="text-xs font-bold text-gray-900">Apple A16 Bionic</p>
            </div>
            <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
              <div class="flex items-center gap-1.5 text-gray-500">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3"/></svg>
                <span class="text-[9px] font-medium">Number of Cores</span>
              </div>
              <p class="text-xs font-bold text-gray-900">6</p>
            </div>
            <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
              <div class="flex items-center gap-1.5 text-gray-500">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 8a2 2 0 012-2h2l1.5-2h7L17 6h2a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/><circle cx="12" cy="13" r="3"/></svg>
                <span class="text-[9px] font-medium">Main camera</span>
              </div>
              <p class="text-xs font-bold text-gray-900">48-12-12 MP</p>
            </div>
            <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
              <div class="flex items-center gap-1.5 text-gray-500">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/></svg>
                <span class="text-[9px] font-medium">Front camera</span>
              </div>
              <p class="text-xs font-bold text-gray-900">12 MP</p>
            </div>
            <div class="bg-[#f5f5f5] rounded-lg p-3 flex flex-col gap-1">
              <div class="flex items-center gap-1.5 text-gray-500">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="2" y="7" width="18" height="10" rx="2"/><path d="M22 11v2"/></svg>
                <span class="text-[9px] font-medium">Battery capacity</span>
              </div>
              <p class="text-xs font-bold text-gray-900">4323 mAh</p>
            </div>
          </div>

          <p class="text-xs text-gray-500 leading-relaxed">
            Enhanced capabilities thanks to an enlarged display of 6.7 inches and work without recharging throughout the day. Incredible photos in weak, yes and in bright light using the new system with two cameras more...
          </p>

          <div class="grid grid-cols-2 gap-3 pt-1">
            <button class="border border-gray-900 text-gray-900 font-bold py-3 rounded-md hover:bg-gray-900 hover:text-white transition text-xs">
              Add to Wishlist
            </button>
            <a href="cart.php?id=<?php echo $product['id']; ?>" class="bg-[#1a1a1a] text-white font-bold py-3 rounded-md hover:bg-black transition text-center text-xs">
              Add to Card
            </a>
          </div>

          <div class="grid grid-cols-3 gap-2 pt-3 border-t border-gray-200">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-gray-700 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M1 3h15v13H1z"/><path d="M16 8h4l3 3v5h-7z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
              <div class="leading-tight">
                <p class="text-[10px] font-medium text-gray-700">Free Delivery</p>
                <p class="text-[10px] text-gray-500">1-2 day</p>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-gray-700 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg>
              <div class="leading-tight">
                <p class="text-[10px] font-medium text-gray-700">In Stock</p>
                <p class="text-[10px] text-gray-500">Today</p>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-gray-700 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c1.66 0 3.22.45 4.56 1.24"/></svg>
              <div class="leading-tight">
                <p class="text-[10px] font-medium text-gray-700">Guaranteed</p>
                <p class="text-[10px] text-gray-500">1 year</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- ===== DETAILS (Desktop) ===== -->
      <div class="mb-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-4 border-b border-gray-200">Details</h2>
        <p class="text-sm text-gray-500 leading-relaxed mb-8">
          Just as a book is judged by its cover, the first thing you notice when you pick up a modern smartphone is the display.
        </p>
        <div class="mb-10">
          <h3 class="text-base font-bold text-gray-900 mb-4">Screen</h3>
          <div class="space-y-0">
            <div class="flex justify-between items-center py-3 border-b border-gray-100">
              <span class="text-sm text-gray-500">Screen diagonal</span>
              <span class="text-sm font-medium text-gray-900">6.7"</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-gray-100">
              <span class="text-sm text-gray-500">The screen resolution</span>
              <span class="text-sm font-medium text-gray-900">2796x1290</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-gray-100">
              <span class="text-sm text-gray-500">The screen refresh rate</span>
              <span class="text-sm font-medium text-gray-900">120 Hz</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-gray-100">
              <span class="text-sm text-gray-500">The pixel density</span>
              <span class="text-sm font-medium text-gray-900">460 ppi</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-gray-100">
              <span class="text-sm text-gray-500">Screen type</span>
              <span class="text-sm font-medium text-gray-900">OLED</span>
            </div>
            <div class="flex justify-between items-start py-3 border-b border-gray-100">
              <span class="text-sm text-gray-500">Additionally</span>
              <div class="text-right">
                <p class="text-sm font-medium text-gray-900 leading-relaxed">Dynamic Island</p>
                <p class="text-sm font-medium text-gray-900 leading-relaxed">Always-On display</p>
                <p class="text-sm font-medium text-gray-900 leading-relaxed">HDR display</p>
                <p class="text-sm font-medium text-gray-900 leading-relaxed">True Tone</p>
                <p class="text-sm font-medium text-gray-900 leading-relaxed">Wide color (P3)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-10">
          <h3 class="text-base font-bold text-gray-900 mb-4">CPU</h3>
          <div class="space-y-0">
            <div class="flex justify-between items-center py-3 border-b border-gray-100">
              <span class="text-sm text-gray-500">CPU</span>
              <span class="text-sm font-medium text-gray-900">A16 Bionic</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-gray-100">
              <span class="text-sm text-gray-500">Number of cores</span>
              <span class="text-sm font-medium text-gray-900">6</span>
            </div>
          </div>
        </div>
        <div class="flex justify-center mt-10">
          <button class="inline-flex items-center gap-2 border border-gray-300 text-gray-700 text-sm font-medium px-6 py-2.5 rounded-md hover:border-gray-900 hover:text-gray-900 transition">
            View More
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
          </button>
        </div>
      </div>

      <!-- ===== REVIEWS (Desktop) ===== -->
      <div class="mb-16 pt-12 border-t border-gray-200">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Reviews</h2>

        <div class="grid grid-cols-[220px_1fr] gap-8 mb-10">
          <div class="bg-[#fafafa] rounded-xl p-6 flex flex-col items-center justify-center text-center">
            <div class="text-5xl font-bold text-gray-900 mb-2">4.8</div>
            <p class="text-xs text-gray-400 mb-3">of 125 reviews</p>
            <div class="flex items-center gap-0.5">
              <?php for ($i = 1; $i <= 5; $i++): ?>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              <?php endfor; ?>
            </div>
          </div>
          <div class="space-y-3">
            <div class="flex items-center gap-4">
              <span class="text-sm text-gray-700 w-28 shrink-0">Excellent</span>
              <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 100%"></div></div>
              <span class="text-sm text-gray-400 w-10 text-right">100</span>
            </div>
            <div class="flex items-center gap-4">
              <span class="text-sm text-gray-700 w-28 shrink-0">Good</span>
              <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 11%"></div></div>
              <span class="text-sm text-gray-400 w-10 text-right">11</span>
            </div>
            <div class="flex items-center gap-4">
              <span class="text-sm text-gray-700 w-28 shrink-0">Average</span>
              <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 3%"></div></div>
              <span class="text-sm text-gray-400 w-10 text-right">3</span>
            </div>
            <div class="flex items-center gap-4">
              <span class="text-sm text-gray-700 w-28 shrink-0">Below Average</span>
              <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 8%"></div></div>
              <span class="text-sm text-gray-400 w-10 text-right">8</span>
            </div>
            <div class="flex items-center gap-4">
              <span class="text-sm text-gray-700 w-28 shrink-0">Poor</span>
              <div class="flex-1 h-1.5 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-yellow-400 rounded-full" style="width: 1%"></div></div>
              <span class="text-sm text-gray-400 w-10 text-right">1</span>
            </div>
          </div>
        </div>

        <div class="border-t border-gray-200 pt-6 mb-10">
          <input type="text" placeholder="Leave Comment" class="w-full border border-gray-200 rounded-md px-4 py-3 text-sm outline-none focus:border-gray-400 transition" />
        </div>

        <!-- Review 1 -->
        <div class="pb-8 mb-8 border-b border-gray-100">
          <div class="flex items-start gap-4">
            <img src="images/reviewer-1.png" alt="Grace Carey" class="w-12 h-12 rounded-full object-cover shrink-0" />
            <div class="flex-1">
              <div class="flex items-center justify-between mb-1">
                <h4 class="text-sm font-bold text-gray-900">Grace Carey</h4>
                <span class="text-xs text-gray-400">24 January, 2023</span>
              </div>
              <div class="flex items-center gap-0.5 mb-3">
                <?php for ($i = 0; $i < 5; $i++): ?>
                  <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php endfor; ?>
              </div>
              <p class="text-sm text-gray-600 leading-relaxed">
                I was a bit nervous to be buying a secondhand phone from Amazon, but I couldn't be happier with my purchase!! I have a pre-paid data plan so I was worried that this phone wouldn't connect with my data plan, since the new phones don't have the physical SIM tray anymore, but couldn't have been easier! I bought an Unlocked black iPhone 14 Pro Max in excellent condition and everything is PERFECT. It was super easy to set up and the phone works and looks great. It truly was in excellent condition. Highly recommend! 🖤
              </p>
            </div>
          </div>
        </div>

        <!-- Review 2 -->
        <div class="pb-8 mb-8 border-b border-gray-100">
          <div class="flex items-start gap-4">
            <img src="images/reviewer-2.png" alt="Ronald Richards" class="w-12 h-12 rounded-full object-cover shrink-0" />
            <div class="flex-1">
              <div class="flex items-center justify-between mb-1">
                <h4 class="text-sm font-bold text-gray-900">Ronald Richards</h4>
                <span class="text-xs text-gray-400">24 January, 2023</span>
              </div>
              <div class="flex items-center gap-0.5 mb-3">
                <?php for ($i = 0; $i < 5; $i++): ?>
                  <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php endfor; ?>
              </div>
              <p class="text-sm text-gray-600 leading-relaxed">
                This phone has 1T storage and is durable. Plus all the new iPhones have a C port! Apple is phasing out the current ones! (All about the Benjamin's) So if you want a phone that's going to last grab an iPhone 14 pro max and get several cords and plugs.
              </p>
            </div>
          </div>
        </div>

        <!-- Review 3 (with images) -->
        <div class="pb-8 mb-8 border-b border-gray-100">
          <div class="flex items-start gap-4">
            <img src="images/reviewer-3.png" alt="Darcy King" class="w-12 h-12 rounded-full object-cover shrink-0" />
            <div class="flex-1">
              <div class="flex items-center justify-between mb-1">
                <h4 class="text-sm font-bold text-gray-900">Darcy King</h4>
                <span class="text-xs text-gray-400">24 January, 2023</span>
              </div>
              <div class="flex items-center gap-0.5 mb-3">
                <?php for ($i = 0; $i < 3; $i++): ?>
                  <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php endfor; ?>
                <?php for ($i = 0; $i < 2; $i++): ?>
                  <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php endfor; ?>
              </div>
              <p class="text-sm text-gray-600 leading-relaxed mb-4">
                I might be the only one to say this but the camera is a little funky. Hoping it will change with a software update: otherwise, love this phone! Came in great condition
              </p>
              <div class="flex items-center gap-3">
                <img src="images/review-image-1.png" alt="Review image 1" class="w-20 h-20 object-cover rounded-lg" />
                <img src="images/review-image-2.png" alt="Review image 2" class="w-20 h-20 object-cover rounded-lg" />
              </div>
            </div>
          </div>
        </div>

        <!-- Review 4 -->
        <div class="pb-8 mb-8 border-b border-gray-100">
          <div class="flex items-start gap-4">
            <img src="images/reviewer-4.png" alt="John Malcolm" class="w-12 h-12 rounded-full object-cover shrink-0" />
            <div class="flex-1">
              <div class="flex items-center justify-between mb-1">
                <h4 class="text-sm font-bold text-gray-900">John Malcolm</h4>
                <span class="text-xs text-gray-400">24 January, 2023</span>
              </div>
              <div class="flex items-center gap-0.5 mb-3">
                <?php for ($i = 0; $i < 4; $i++): ?>
                  <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php endfor; ?>
                <?php for ($i = 0; $i < 1; $i++): ?>
                  <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php endfor; ?>
              </div>
              <p class="text-sm text-gray-600 leading-relaxed">
                In WordPress, it is already difficult to surprise with the opening of a new institution, but it still possible. Especially if it is a True Cost project. Here you pay only for food and drinks, and the interior...
              </p>
            </div>
          </div>
        </div>

        <div class="flex justify-center mt-8">
          <button class="inline-flex items-center gap-2 border border-gray-300 text-gray-700 text-sm font-medium px-6 py-2.5 rounded-md hover:border-gray-900 hover:text-gray-900 transition">
            View More
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
          </button>
        </div>
      </div>

      <!-- ===== RELATED PRODUCTS (Desktop) ===== -->
      <div class="pt-12 border-t border-gray-200">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Related Products</h2>
        <div class="grid grid-cols-4 gap-4">

          <div class="relative bg-[#f5f5f5] rounded-lg p-5 flex flex-col">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
            </button>
            <div class="h-48 flex items-center justify-center mb-4">
              <img src="images/iphone1.png" alt="iPhone 14 Pro 512GB Gold" class="max-h-full object-contain" />
            </div>
            <p class="text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">Apple iPhone 14 Pro 512GB Gold (MQ233)</p>
            <p class="text-xl font-bold text-gray-900 mb-3 text-center">$1437</p>
            <a href="product.php?id=1" class="w-full bg-[#1a1a1a] text-white text-xs font-bold py-2.5 rounded-md hover:bg-black transition text-center block">Buy Now</a>
          </div>

          <div class="relative bg-[#f5f5f5] rounded-lg p-5 flex flex-col">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
            </button>
            <div class="h-48 flex items-center justify-center mb-4">
              <img src="images/airpods2.png" alt="AirPods Max Silver" class="max-h-full object-contain" />
            </div>
            <p class="text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">AirPods Max Silver</p>
            <p class="text-xl font-bold text-gray-900 mb-3 text-center">$549</p>
            <a href="product.php?id=2" class="w-full bg-[#1a1a1a] text-white text-xs font-bold py-2.5 rounded-md hover:bg-black transition text-center block">Buy Now</a>
          </div>

          <div class="relative bg-[#f5f5f5] rounded-lg p-5 flex flex-col">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
            </button>
            <div class="h-48 flex items-center justify-center mb-4">
              <img src="images/Applewatch.png" alt="Apple Watch Series 9" class="max-h-full object-contain" />
            </div>
            <p class="text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">Apple Watch Series 9 GPS 41mm Starlight Aluminium Case</p>
            <p class="text-xl font-bold text-gray-900 mb-3 text-center">$399</p>
            <a href="product.php?id=3" class="w-full bg-[#1a1a1a] text-white text-xs font-bold py-2.5 rounded-md hover:bg-black transition text-center block">Buy Now</a>
          </div>

          <div class="relative bg-[#f5f5f5] rounded-lg p-5 flex flex-col">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
            </button>
            <div class="h-48 flex items-center justify-center mb-4">
              <img src="images/appleiphone4.png" alt="iPhone 14 Pro 1TB Gold" class="max-h-full object-contain" />
            </div>
            <p class="text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">Apple iPhone 14 Pro 1TB Gold (MQ2V3)</p>
            <p class="text-xl font-bold text-gray-900 mb-3 text-center">$1499</p>
            <a href="product.php?id=4" class="w-full bg-[#1a1a1a] text-white text-xs font-bold py-2.5 rounded-md hover:bg-black transition text-center block">Buy Now</a>
          </div>

        </div>
      </div>

    </div>

  </div>
</main>

<?php include 'includes/overall/footer.php'; ?>