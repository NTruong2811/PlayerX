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
                        <a href="<?= BASE_URL ?>admin/products">
                            <li>PRODUCT</li>
                        </a>
                        <a id="botline" href="<?= BASE_URL ?>admin/orders">
                            <li>ODERS</li>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>
        <table style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>TIME</th>
                    <th>PAYMENT</th>
                    <th>STATUS</th>
                </tr>
            </thead>

            <tbody style="font-family: sans-serif;">
                <div id="list">
                    <?php
                    if (count($order_list) > 0) {
                        foreach ($order_list as $row) {
                    ?>
                            <tr id="row_<?= $row->order_id ?>">
                                <td><?= $row->full_name ?></td>
                                <td><?= $row->phone ?></td>
                                <td><?= $row->address ?></td>
                                <td><?= $row->date ?></td>
                                <td><?php echo number_format(round($row->cart_total))?>VND</td>
                                <td><?php
                                    if ($row->status == 0) {
                                    ?>
                                        <a href="orders/status/<?= $row->id_order ?>"> <button class="button-23" role="button">wait confirm</button></a>
                                    <?php
                                    } elseif ($row->status == 1) {
                                        echo " Delivering";
                                    } else {
                                        echo "Complete";
                                    }
                                    ?>
                                </td>
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
    main{
        padding-bottom: 100px;
    }
    /* CSS */
    .button-23 {
        background-color: #FFFFFF;
        border: 1px solid #222222;
        border-radius: 8px;
        box-sizing: border-box;
        color: #222222;
        cursor: pointer;
        display: inline-block;
        font-family: Circular, -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 20px;
        margin: 0;
        outline: none;
        padding: 13px 23px;
        position: relative;
        text-align: center;
        text-decoration: none;
        touch-action: manipulation;
        transition: box-shadow .2s, -ms-transform .1s, -webkit-transform .1s, transform .1s;
        user-select: none;
        -webkit-user-select: none;
        width: auto;
    }

    .button-23:focus-visible {
        box-shadow: #222222 0 0 0 2px, rgba(255, 255, 255, 0.8) 0 0 0 4px;
        transition: box-shadow .2s;
    }

    .button-23:active {
        background-color: #F7F7F7;
        border-color: #000000;
        transform: scale(.96);
    }

    .button-23:disabled {
        border-color: #DDDDDD;
        color: #DDDDDD;
        cursor: not-allowed;
        opacity: 1;
    }
</style>