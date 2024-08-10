<!-- src/views/category.tpl.php -->
<div class="container">
    <!-- Display the category name -->
    <h1>Products in Category: <?php echo htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8'); ?></h1>

    <!-- Display Products in Selected Category -->
    <h2 class="mt-5">Products in <?= htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8'); ?></h2>
    <div class="row">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="col-md-4 mb-4">
                    <div class="product card">
                        <img src="<?= htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8'); ?></h5>
                            <p class="card-text"><?= htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="card-text"><strong>Price:</strong> $<?= htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></p>
                            <a href="/product/<?= urlencode($product->id) ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products found in this category.</p>
        <?php endif; ?>
    </div>

    <!-- Display Categories -->
    <h2 class="mt-5">Categories</h2>
    <div class="row">
        <?php foreach ($categories as $category): ?>
            <?php
            // Escape and encode category names
            $escapedCategory = htmlspecialchars($category, ENT_QUOTES, 'UTF-8');
            $encodedCategory = urlencode($category);
            ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $escapedCategory ?></h5>
                        <a href="/category/<?= $encodedCategory ?>" class="btn btn-primary">View Products</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>