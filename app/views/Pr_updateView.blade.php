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
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/ad_users.css">
    <title>USER</title>
</head>

<body>
<?php
    require_once "public/template/header.php";
    ?>
    <!-- header end -->
    <main>
        <div class="title">
            <div class="h2">
                <h2>ADMIN</h2>
            </div>
            <div class="nav">
                <nav>
                    <ul>
                        <a href="<?= BASE_URL ?>admin">
                            <li>Dashboard</li>
                        </a>
                        <a href="<?= BASE_URL ?>admin/users">
                            <li>USERS</li>
                        </a>
                        <a href="<?= BASE_URL ?>admin/categories">
                            <li>CATEGORIES</li>
                        </a>
                        <a id="botline" href="<?= BASE_URL ?>admin/products">
                            <li>PRODUCT</li>
                        </a>
                        <a href="<?= BASE_URL ?>admin/oders">
                            <li>ODERS</li>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>
    <div class="update">
        <h2>Update Product</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="left">
                <input type="text" name="name" id="edit_fullname" value="<?= $product['product_name'] ?>" placeholder="Full Name"> <br>
                <div class="email-age">
                    <input name="sale" type="text" id="edit_email" value="<?= $product['sale'] ?>" placeholder="Email">
                    <input name="view" type="text" value="<?= $product['view'] ?>" id="edit_age" placeholder="Age">
                </div>
            </div>
            <div class="right">
                <input name="price"  type="text" id="edit_role" value="<?= $product['price'] ?>" autocomplete="off" placeholder="Name"> <br>
                <input name="img" type="file" id="avt">
                 <input name="old_img" style="visibility: hidden;" value="<?= $product['img'] ?>" type="text" name="" id="old_file">
                <input name="id" style="visibility: hidden;" value="<?= $product['user_id'] ?>" readonly type="text" id="id_ud"></input>
            </div>
            <textarea name="desc" id="" cols="30" rows="10"><?= $product['description'] ?></textarea>
            <div class="bt">
                <button id="bt" name="submit" type="submit">Update</button>
                <br>
            </div>
        </form>
    </div>
</main>
</body>
</html>
<style>
    .update textarea{
        position: absolute;
        right: 20%;
        
    }
</style>