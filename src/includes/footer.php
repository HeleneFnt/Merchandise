<!--TODO : Adapt Footer-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="/assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                    </div>
                    <ul>
                        <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                        <li><a href="mailto:hexashop@company.com">hexashop@company.com</a></li>
                        <li><a href="tel:010-020-0340">010-020-0340</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Shopping &amp; Categories</h4>
                <ul>
                    <?php if (isset($categories) && is_array($categories)): ?>
                        <?php foreach ($categories as $category): ?>
                            <li><a href="category.tpl.php?name=<?= urlencode(htmlspecialchars($category, ENT_QUOTES, 'UTF-8')) ?>"><?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?></a></li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li><a href="#">No categories available</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="under-footer">
<!-- Following features comes from another PHP project -->
                    <p class="text-muted">&copy; 2024 Le Campus Numérique in The Alps. <a href="https://www.linkedin.com/in/hélène-finot" target="_blank" rel="noopener noreferrer">Hélène Finot</a> Tous droits réservés.</p>
                    <?php if (isset($_SESSION['dateFirstVisit'])): ?>
                        <p>Vous avez visité ce site pour la première fois le : <?= htmlspecialchars($_SESSION['dateFirstVisit']) ?></p>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['countViewPage'])): ?>
                        <p>Vous avez vu <?= htmlspecialchars($_SESSION['countViewPage']) ?> pages sur ce site.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript at the end of the body for optimized loading -->
    <script src="/assets/js/jquery-2.1.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/accordions.js"></script>
    <script src="/assets/js/datepicker.js"></script>
    <script src="/assets/js/scrollreveal.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/imgfix.min.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/lightbox.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/custom.js"></script>
</footer>
</body>
</html>
