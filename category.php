<?php
$page_title = "Smartphones - 7cyber";
include 'core/init.php';
include 'includes/overall/header.php';

$products = mysqli_query($conn, "SELECT * FROM products ORDER BY id ASC");
$total = mysqli_num_rows($products);
?>

<main class="w-full bg-white">
  <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-[160px] py-6 lg:py-8">

    <!-- ============================================ -->
    <!-- MOBILE VIEW -->
    <!-- ============================================ -->
    <div class="lg:hidden">

      <!-- Filters + By rating (2 buttons) -->
      <div class="flex items-center gap-3 mb-5">
        <button class="flex-1 flex items-center justify-between border border-gray-200 rounded-md px-4 py-2.5">
          <span class="text-sm font-medium text-gray-900">Filters</span>
          <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M7 12h10M10 18h4"/>
          </svg>
        </button>
        <button class="flex-1 flex items-center justify-between border border-gray-200 rounded-md px-4 py-2.5">
          <span class="text-sm font-medium text-gray-900">By rating</span>
          <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
      </div>

      <!-- Products Result -->
      <p class="text-xs text-gray-500 mb-4">
        Products Result : <span class="font-bold text-gray-900"><?php echo $total; ?></span>
      </p>

      <!-- Products Grid (2 columns) -->
      <div class="grid grid-cols-2 gap-3">

        <?php while ($product = mysqli_fetch_assoc($products)): ?>
          <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-3 flex flex-col">

            <!-- Heart Icon -->
            <button class="absolute top-2.5 right-2.5 text-gray-400 hover:text-red-500 transition">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
              </svg>
            </button>

            <!-- Product Image -->
            <div class="h-28 flex items-center justify-center mb-3 mt-2">
              <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="max-h-full object-contain" />
            </div>

            <!-- Product Name (2 lines) -->
            <p class="text-xs font-bold text-gray-900 leading-snug mb-2 flex-grow text-center line-clamp-2">
              <?php echo $product['name']; ?>
            </p>

            <!-- Price -->
            <p class="text-lg font-bold text-gray-900 mb-3 text-center">
              $<?php echo number_format($product['price'], 0); ?>
            </p>

            <!-- Buy Now Button -->
            <a href="product.php?id=<?php echo $product['id']; ?>" 
               class="w-full bg-gray-900 text-white text-xs font-bold py-2.5 rounded-md hover:bg-black transition text-center block">
              Buy Now
            </a>

          </div>
        <?php endwhile; ?>

      </div>

    </div>


    <!-- ============================================ -->
    <!-- DESKTOP VIEW (Wahi purana) -->
    <!-- ============================================ -->
    <div class="hidden lg:block">

      <!-- Breadcrumb -->
      <div class="flex items-center gap-2 text-sm text-gray-500 mb-8 flex-wrap">
        <a href="index.php" class="hover:text-gray-900 transition">Home</a>
        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
        <a href="#" class="hover:text-gray-900 transition">Catalog</a>
        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
        <span class="text-gray-900 font-bold">Smartphones</span>
      </div>

      <div class="grid grid-cols-[280px_1fr] gap-8">

        <!-- SIDEBAR FILTERS -->
        <aside class="space-y-6">

          <!-- Price -->
          <div class="border-b border-gray-200 pb-6">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-sm font-bold text-gray-900">Price</h3>
              <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
              </svg>
            </div>
            <div class="grid grid-cols-2 gap-3 mb-4">
              <div>
                <label class="text-[10px] font-bold text-gray-900 block mb-1">From</label>
                <input type="text" value="0" class="w-full border border-gray-200 rounded-md px-3 py-2 text-sm outline-none focus:border-gray-400" />
              </div>
              <div>
                <label class="text-[10px] font-bold text-gray-900 block mb-1">To</label>
                <input type="text" value="3000" class="w-full border border-gray-200 rounded-md px-3 py-2 text-sm outline-none focus:border-gray-400" />
              </div>
            </div>
            <div class="relative mt-3">
              <div class="h-1 bg-gray-200 rounded-full"><div class="h-1 bg-gray-900 rounded-full w-full"></div></div>
              <div class="absolute top-1/2 -translate-y-1/2 left-0 w-3 h-3 bg-gray-900 rounded-full"></div>
              <div class="absolute top-1/2 -translate-y-1/2 right-0 w-3 h-3 bg-gray-900 rounded-full"></div>
            </div>
          </div>

          <!-- Brand -->
          <div class="border-b border-gray-200 pb-6">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-sm font-bold text-gray-900">Brand</h3>
              <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
              </svg>
            </div>
            <div class="relative mb-4">
              <input type="text" placeholder="Search" class="w-full bg-gray-50 border border-gray-200 rounded-md px-3 py-2 text-xs outline-none focus:border-gray-400" />
            </div>
            <div class="space-y-3">
              <?php
              $brands = mysqli_query($conn, "SELECT DISTINCT brand FROM products ORDER BY brand");
              while ($brand = mysqli_fetch_assoc($brands)):
                $b = $brand['brand'];
                $count_query = mysqli_query($conn, "SELECT COUNT(*) as c FROM products WHERE brand='$b'");
                $count = mysqli_fetch_assoc($count_query)['c'];
              ?>
                <label class="flex items-center justify-between cursor-pointer">
                  <span class="flex items-center gap-2">
                    <input type="checkbox" class="w-4 h-4 accent-gray-900" />
                    <span class="text-sm font-bold text-gray-900"><?php echo $brand['brand']; ?></span>
                  </span>
                  <span class="text-xs font-bold text-gray-900"><?php echo $count; ?></span>
                </label>
              <?php endwhile; ?>
            </div>
          </div>

          <!-- Built-in memory -->
          <div class="border-b border-gray-200 pb-6">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-sm font-bold text-gray-900">Built-in memory</h3>
              <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
              </svg>
            </div>
            <div class="space-y-3">
              <label class="flex items-center justify-between cursor-pointer">
                <span class="flex items-center gap-2">
                  <input type="checkbox" class="w-4 h-4 accent-gray-900" />
                  <span class="text-sm font-bold text-gray-900">16GB</span>
                </span>
                <span class="text-xs font-bold text-gray-900">85</span>
              </label>
              <label class="flex items-center justify-between cursor-pointer">
                <span class="flex items-center gap-2">
                  <input type="checkbox" class="w-4 h-4 accent-gray-900" />
                  <span class="text-sm font-bold text-gray-900">64GB</span>
                </span>
                <span class="text-xs font-bold text-gray-900">10</span>
              </label>
              <label class="flex items-center justify-between cursor-pointer">
                <span class="flex items-center gap-2">
                  <input type="checkbox" class="w-4 h-4 accent-gray-900" />
                  <span class="text-sm font-bold text-gray-900">128GB</span>
                </span>
                <span class="text-xs font-bold text-gray-900">45</span>
              </label>
              <label class="flex items-center justify-between cursor-pointer">
                <span class="flex items-center gap-2">
                  <input type="checkbox" class="w-4 h-4 accent-gray-900" />
                  <span class="text-sm font-bold text-gray-900">256GB</span>
                </span>
                <span class="text-xs font-bold text-gray-900">38</span>
              </label>
              <label class="flex items-center justify-between cursor-pointer">
                <span class="flex items-center gap-2">
                  <input type="checkbox" class="w-4 h-4 accent-gray-900" />
                  <span class="text-sm font-bold text-gray-900">512GB</span>
                </span>
                <span class="text-xs font-bold text-gray-900">12</span>
              </label>
            </div>
          </div>

        </aside>

        <!-- PRODUCTS GRID -->
        <div>

          <!-- Toolbar -->
          <div class="flex items-center justify-between mb-6 flex-wrap gap-3">
            <p class="text-sm text-gray-600">
              Selected Products: <span class="font-bold text-gray-900"><?php echo $total; ?></span>
            </p>
            <select class="border border-gray-200 rounded-md px-4 py-2 text-sm text-gray-700 outline-none focus:border-gray-400 cursor-pointer">
              <option>By rating</option>
              <option>Price: Low to High</option>
              <option>Price: High to Low</option>
              <option>Newest</option>
            </select>
          </div>

          <!-- Products Grid (3 columns) -->
          <div class="grid grid-cols-3 gap-6">

            <?php
            mysqli_data_seek($products, 0);
            while ($product = mysqli_fetch_assoc($products)):
            ?>
              <div class="relative bg-[#fafafa] border border-gray-100 rounded-lg p-5 flex flex-col">
                <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                  </svg>
                </button>
                <div class="h-48 flex items-center justify-center mb-4">
                  <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="max-h-full object-contain" />
                </div>
                <p class="text-sm font-bold text-gray-900 leading-snug mb-2 flex-grow text-center">
                  <?php echo $product['name']; ?>
                </p>
                <p class="text-xl font-bold text-gray-900 mb-3 text-center">
                  $<?php echo number_format($product['price'], 2); ?>
                </p>
                <a href="product.php?id=<?php echo $product['id']; ?>" class="w-full bg-gray-900 text-white text-sm font-bold py-2.5 rounded-md hover:bg-black transition text-center block">
                  Buy Now
                </a>
              </div>
            <?php endwhile; ?>

          </div>

        </div>

      </div>

    </div>

  </div>
</main>

<?php include 'includes/overall/footer.php'; ?>