<div class="container mt-5">
    <?php if ($product): ?>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <div class="col-md-6">
                <h1><?php echo htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8'); ?></h1>
                <p class="lead">Price: $<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Category:</strong> <?php echo htmlspecialchars($product->category, ENT_QUOTES, 'UTF-8'); ?></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    <?php else: ?>
        <h2>Product not found</h2>
    <?php endif; ?>
</div>