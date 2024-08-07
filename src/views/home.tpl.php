<!-- src/views/home.tpl.php -->

<div class="container">
    <h1>Merchandise</h1>
    <p>Welcome to our online store! We offer a wide range of products for all your needs.</p>

</div>
<div class="container mt-5">
    <!-- Slider -->
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $isActive = true;
            foreach ($products as $product) {
                $activeClass = $isActive ? 'active' : '';
                $isActive = false;
                $imageUrl = htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8');
                $title = htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8');
                $price = htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8');
                echo "
            <div class='carousel-item $activeClass'>
                <img src='$imageUrl' class='d-block w-100' alt='$title'>
                <div class='carousel-caption d-none d-md-block'>
                    <h5>$title</h5>
                    <p>\$$price</p>
                </div>
            </div>";
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Liste des catégories -->
    <h2 class="mt-5">Categories</h2>
    <div class="row">
        <?php
        foreach ($categories as $category) {
            $escapedCategory = htmlspecialchars($category, ENT_QUOTES, 'UTF-8');
            echo "
        <div class='col-md-3'>
            <div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>$escapedCategory</h5>
                    <a href='category.tpl.php?name=" . urlencode($escapedCategory) . "' class='btn btn-primary'>View Products</a>
                </div>
            </div>
        </div>";
        }
        ?>
    </div>

    <!-- Produits en vedette -->
    <h2 class="mt-5">Featured Products</h2>
    <div class="row">
        <?php
        foreach ($products as $product) {
            $imageUrl = htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8');
            $title = htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8');
            $price = htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8');
            $id = htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8');
            echo "
        <div class='col-md-3'>
            <div class='card'>
                <img src='$imageUrl' class='card-img-top' alt='$title'>
                <div class='card-body'>
                    <h5 class='card-title'>$title</h5>
                    <p class='card-text'>\$$price</p>
                    <a href='product.tpl.php?id=" . urlencode($id) . "' class='btn btn-primary'>View Details</a>
                </div>
            </div>
        </div>";
        }
        ?>
    </div>
</div>
