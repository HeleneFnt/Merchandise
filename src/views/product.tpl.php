<!-- src/views/product.tpl.php -->
<div class="container mt-5">
    <?php if ($product): ?>
        <div class="row">
            <div class="col-md-6">
                <!-- Display the product image with proper escaping for attributes -->
                <img src="<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <div class="col-md-6">
                <!-- Display the product title with proper escaping -->
                <h1><?php echo htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8'); ?></h1>
                <!-- Display the product price with proper escaping -->
                <p class="lead">Price: $<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></p>
                <!-- Display the product description with proper escaping -->
                <p><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
                <!-- Display the product category with proper escaping -->
                <p><strong>Category:</strong> <?php echo htmlspecialchars($product->category, ENT_QUOTES, 'UTF-8'); ?></p>
                <!-- Placeholder button, ensure any links or actions use proper encoding if applicable -->
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    <?php else: ?>
        <!-- Display a message if the product is not found -->
        <h2>Product not found</h2>
    <?php endif; ?>
</div>
