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
            <h2>Add Product</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="left">
                    <input type="text" name="name" id="edit_fullname" value="" placeholder="Name"> <br>
                    <div class="email-age">
                        <input name="sale" type="text" id="edit_email" value="" placeholder="Sale">
                        <input name="view" type="text" value="" id="edit_age" placeholder="View">
                    </div>
                </div>
                <div class="right">
                    <input name="price" type="text" id="edit_role" value="" autocomplete="off" placeholder="Price"> <br>
                    <input name="img" type="file" id="avt">
                    <select name="cate" id="">
                    <?php foreach ($all_cate as $item) {
                    ?>
                    <option value="<?= $item['cate_id'] ?>"><?= $item['cate_name'] ?></option>
                    <?php
                    }  ?>
                </select>
                </div>
                <textarea name="desc" id="" cols="30" rows="10"></textarea>
                <div class="bt">
                    <button id="bt" name="submit" type="submit">Add</button>
                    <br>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
<style>
    .update textarea {
        position: absolute;
        right: 20%;

    }

    .update #bt {
        margin-top: 50px;
    }
    .update select{
        position: absolute;
        right: 38%;
        margin-top: 50px;
        cursor: pointer;
    }
</style>