<!-- Main Content -->
<div class="container">
    <h1>Merchandise</h1>
    <p>Welcome to our online store! We offer a wide range of products for all your needs.</p>
</div>

<div class="container mt-5">
    <!-- Owl Carousel -->
    <div class="owl-carousel owl-theme">
        <?php foreach ($products as $product): ?>
            <?php
            $imageUrl = htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8');
            $title = htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8');
            $price = htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8');
            ?>
            <div class="item">
                <div class="thumb">
                    <img src="<?= $imageUrl ?>" alt="<?= $title ?>">
                </div>
                <div class="down-content">
                    <h4><?= $title ?></h4>
                    <span>$<?= $price ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
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
