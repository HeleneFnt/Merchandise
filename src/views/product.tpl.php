<!-- src/views/product.tpl.php -->
<main>
    <div class="container product-container">
        <?php if ($product): ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="product-image">
                        <!-- Display the product image with proper escaping for attributes -->
                        <img src="<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>"
                             alt="<?php echo htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8'); ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Display the product title with proper escaping -->
                    <h1 class="product-title"><?php echo htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8'); ?></h1>
                    <!-- Display the product price with proper escaping -->
                    <p class="product-price">Price: $<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></p>
                    <!-- Display the product description with proper escaping -->
                    <p class="product-description"><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
                    <!-- Display the product category with proper escaping -->
                    <p class="product-category"><strong>Category:</strong> <?php echo htmlspecialchars($product->category, ENT_QUOTES, 'UTF-8'); ?></p>
                    <!-- Placeholder button, ensure any links or actions use proper encoding if applicable -->
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        <?php else: ?>
            <!-- Display a message if the product is not found -->
            <h2>Product not found</h2>
        <?php endif; ?>
    </div>
</main>
