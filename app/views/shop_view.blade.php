<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Rubik:wght@700&display=swap" rel="stylesheet">
    <!-- style file -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/shop.css">
    <title>XPLAYER</title>
</head>

<body>
    <!-- header -->
    <?php
    require_once "public/template/header.php";
    ?>
    <div class="banner">
        <img id="bg" src="<?= BASE_URL ?>public/upload/img/bg_banner.jpg" alt="">
        <div class="lg">
            <img id="lg" src="<?= BASE_URL ?>public/upload/img/logo_banner.png" alt=""> <br>
            <span>XPLAYER</span>
        </div>
    </div>
    </div>
    <main>
        <div class="head">
            <div class="title">
                <h2>WE SHOW YOU THE BEST STYLE FOR GAMER</h2>
                <i class="fas fa-gamepad"></i>
            </div>
        </div>
        <div class="new">
            <div class="title">
                <h2>NEW</h2>
                <span>We always update the latest and best products to you.</span>
                <div class="search-container">
                    <form action="shop" method="POST">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="list">
                <?php
                foreach ($products as $card) {
                ?>
                    <div class="card">
                        <a href="">
                            <div class="img">
                                <img src="<?= BASE_URL ?>public/upload/img/products/<?= $card['img'] ?>" alt="">
                            </div>
                            <div class="text">
                                <div class="name_price">
                                    <span><?php
                                            if (strlen($card['product_name']) > 10) {
                                                echo substr($card['product_name'], 0, 10) . "...";
                                            }
                                            ?></span>
                                    <span id="price"><?php
                                                        echo number_format(round($card['price']))
                                                        ?>đ</span>
                                </div>
                                <div class="by">
                                    <a href="cart/add_to_cart/<?= $card['id_product'] ?>"><button class="add_to_cart">Add to cart <i class="fas fa-cart-plus"></i></button></a>
                                    <a href=""><button class="by_now">By now</button></a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
</body>


</html>
<!-- slide -->