<header>
    <div class="search">
        <i class="fas fa-search"></i>
    </div>
    <div class="nav-left">
        <ul>
            <li><a href="<?= BASE_URL ?>">HOME</a></li>
            <li><a href="">PAGES</a></li>
            <li><a href="">PORTOLIO</a></li>
        </ul>
    </div>
    <div class="logo">
        <a href="<?= BASE_URL ?>">
            <img src="<?= BASE_URL ?>/public/upload/img/logo-background.png" alt="" id="bg">
            <img src="<?= BASE_URL ?>/public/upload/img/logo-header.png" alt="" id="lg">
        </a>
    </div>
    <div class="nav-right">
        <ul>
            <li><a href="">BLOG</a></li>
            <li><a href="shop">SHOP</a></li>
            <li><a href="">ELEMENTS</a></li>
        </ul>
    </div>
    <div class="user">
        <?php
        if (isset($_SESSION["user"])) {
        ?>
            <div class="dropdown">
                <div class="avt_name">
                    <img src="<?= BASE_URL ?>public/upload/img/avatar/<?php echo $_SESSION["user"]['avt']; ?>" alt=""> <br>
                </div>
                <div class="dropdown-content">
                    <?php
                    if ($_SESSION["user"]['role'] == 0) {
                    ?>
                        <a href="<?= BASE_URL ?>admin">ADMIN</a>
                    <?php
                    } ?>
                    <a href="<?= BASE_URL ?>cart">Cart <i class="fas fa-shopping-cart"></i></a>
                    <a href="<?= BASE_URL ?>orders/my_orders">My order <i class="fas fa-shopping-cart"></i></a>
                    <a href="<?= BASE_URL ?>logout">LOG OUT</a>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="login-regiter">
                <span><a href="<?= BASE_URL ?>login">Login</a></span> / <span><a href="<?= BASE_URL ?>register">Regiter</a></span>
            </div>
        <?php
        }
        ?>
    </div>
</header>
