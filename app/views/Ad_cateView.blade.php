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
    <!-- header -->
    <?php
    require_once "public/template/header.php";
    ?>
    <!-- header end -->
    <main>
        <div class="title">
            <div class="h2">
                <h2>ADMIN</h2>
            </div>
            <a href="<?= BASE_URL ?>admin/categories/add"><button class="button-24" role="button">Add New</button></a>
            <div class="nav">
                <nav>
                    <ul>
                        <a href="<?= BASE_URL ?>admin">
                            <li>Dashboard</li>
                        </a>
                        <a href="<?= BASE_URL ?>admin/users">
                            <li>USERS</li>
                        </a>
                        <a id="botline" href="<?= BASE_URL ?>admin/categories">
                            <li>CATEGORIES</li>
                        </a>
                        <a href="<?= BASE_URL ?>admin/products">
                            <li>PRODUCT</li>
                        </a>
                        <a href="<?= BASE_URL ?>admin/orders">
                            <li>ODERS</li>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>
        <table style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="width: 60%;">NAME</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
            </thead>

            <tbody style="font-family: sans-serif;">
                <div id="list">
                    <?php
                    if (count($all_cate) > 0) {
                        foreach ($all_cate as $row) {
                    ?>
                            <tr id="row_<?= $row->cate_id ?>">
                                <td><?= $row->cate_name ?></td>
                                <td><a href="categories/update/<?= $row->cate_id ?>"><i class="fas fa-pen-square"></i></a></td>
                                <td> <a onclick="return confirm('bạn có chắc muốn xóa ko?')" href="categories/delete/<?= $row->cate_id ?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </div>
            </tbody>
        </table>
    </main>
</body>

</html>

<style>
    
/* CSS */
.button-24 {
    position: absolute;
    right: 10%;
    top: 90%;
  background: #FF4742;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}

.button-24:hover,
.button-24:active {
  background-color: initial;
  background-position: 0 0;
  color: #FF4742;
}

.button-24:active {
  opacity: .5;
}
</style>