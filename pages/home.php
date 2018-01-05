<html>
<?= Template::loadTemplate('head') ?>
<body>
<?= Template::loadTemplate('header') ?>

<main class="container">

    <section>

        <div class="section-title">
            <span>Wyróżnione</span>
        </div>

        <div class="products section-content">

            <div class="product">
                <img src="http://via.placeholder.com/270x320"/>
                <div class="title">
                    Star Wars: Battlefront II
                </div>
                <div class="bottom-section">
                    <div class="price">
                    <span>
                        200.00 zł
                    </span>
                    </div>
                    <div class="cart-add">
                    <span>
                        <i class="fa fa-cart-plus" aria-hidden="true"></i> DODAJ
                    </span>
                    </div>
                </div>
            </div>

            <div class="product">
                <img src="http://via.placeholder.com/270x320"/>
                <div class="title">
                    Call of Duty: WWII
                </div>
                <div class="bottom-section">
                    <div class="price">
                    <span>
                        169.99 zł
                    </span>
                    </div>
                    <div class="cart-add">
                    <span>
                        <i class="fa fa-cart-plus" aria-hidden="true"></i> DODAJ
                    </span>
                    </div>
                </div>
            </div>

            <div class="product">
                <img src="http://via.placeholder.com/270x320"/>
                <div class="title">
                    Super Mario Odyssey
                </div>
                <div class="bottom-section">
                    <div class="price">
                    <span>
                        219.99 zł
                    </span>
                    </div>
                    <div class="cart-add">
                    <span>
                        <i class="fa fa-cart-plus" aria-hidden="true"></i> DODAJ
                    </span>
                    </div>
                </div>
            </div>

            <div class="product">
                <img src="http://via.placeholder.com/270x320"/>
                <div class="title">
                    Sid Meier's Civilization VI
                </div>
                <div class="bottom-section">
                    <div class="price">
                    <span>
                        169.99 zł
                    </span>
                    </div>
                    <div class="cart-add">
                    <span>
                        <i class="fa fa-cart-plus" aria-hidden="true"></i> DODAJ
                    </span>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <div id="all-products">
        <a href="?page=products">
            Zobacz wszystkie produkty
        </a>
    </div>

</main>
</body>
</html>