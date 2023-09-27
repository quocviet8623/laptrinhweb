<?php 
session_start()
 ?>
<!DOCTYPE html>

<html>

<head>
    <title> Chi tiết sản phẩm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style4.css">

</head>

<body>
    <style>
        body {
            font-family: arial;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            width: 1200px;
            margin: 0 auto;

            padding: 15px;
        }

        h1 {
            text-align: center;
        }

        .product-items {
            border: 1px solid #000;
            padding: 30px;
        }

        .product-item {
            float: left;
            width: 23%;
            margin: 1%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #000;
            line-height: 26px;
        }

        .product-item label {
            font-weight: bold;
        }

        .product-item p {
            margin: 0;
            line-height: 26px;
            max-height: 52px;
            overflow: hidden;
        }

        .product-price {
            color: red;
            font-weight: bold;
        }

        .product-img {
            padding: 5px;
            border: 1px solid #000;
            margin-bottom: 5px;
        }

        .product-item img {
            max-width: 100%;
        }

        .product-item ul {
            margin: 0;
            padding: 0;
            border-right: 1px solid #000;
        }

        .product-item ul li {
            float: left;
            width: 33.3333%;
            list-style: none;
            text-align: center;
            border: 1px solid #000;
            border-right: 0;
            box-sizing: border-box;
        }

        .clear-both {
            clear: both;
        }

        a {
            text-decoration: none;
        }

        .buy-button {
            text-align: right;
            margin-top: 10px;
        }

        .buy-button a {
            background: #444;
            padding: 5px;
            color: #fff;
        }

        #pagination {
            text-align: right;
            margin-top: 15px;
        }

        .page-item {
            border: 1px solid #000;
            padding: 5px 9px;
            color: #000;
        }

        .current-page {
            background: #000;
            color: #FFF;
        }

        #product-detail {
            border-top: 1px solid #000;
            padding: 15px 0 0 0;
        }

        #product-img {
            width: 30%;
            float: left;
        }

        #product-info {
            float: right;
            width: 70%;
            text-align: left;
            padding-left: 30px;
        }

        #product-img img {
            max-width: 100%;
            padding: 5px;
            border: 1px solid #000;
            background: #eee;
        }

        h1 {
            text-align: left;
            margin-top: 0;
        }

        label.add-to-cart {
            background: #000;
            border: 1px solid #000;
            margin-top: 15px;
            padding: 15px;
            display: inline-block;
            color: #fff;
        }

        label a {
            color: #FFF;
        }

        #gallery {
            margin-top: 10px;
        }

        #gallery ul {
            margin: 0;
            padding: 0;
        }

        #gallery ul li {
            width: 150px;
            float: left;
            list-style: none;
            margin-right: 5px;
            margin-bottom: 5px;
            height: 100px;
            text-align: center;
            padding: 5px;
            border: 1px solid #000;
            background: #eee;
        }

        #gallery ul li img {
            max-width: 100%;
            max-height: 100%;
            vertical-align: middle;
        }

        table {
            border-collapse: collapse;
            width: 1170px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        table .product-img img {
            max-width: 100px;
        }

        table .product-name {
            width: 350px;
            padding-left: 20px;
        }

        table .product-img {
            width: 120px;
            text-align: center;
        }

        table .product-number {
            width: 50px;
            text-align: center;
        }

        table .product-price {
            width: 100px;
            text-align: center;
        }

        table .product-quantity input {
            width: 40px;
            text-align: center;
        }

        table .product-quantity {
            width: 60px;
            text-align: center;
        }

        table .total-money {
            width: 100px;
            text-align: center;
        }

        #form-button {
            text-align: right;
            margin-top: 15px;
        }

        .product-delete {
            width: 100px;
            text-align: center;
        }

        #cart-form label {
            width: 100px;
            display: inline-block;
            margin-top: 15px;
        }

        #cart-form textarea {
            margin-top: 15px;
        }

        #cart-form input {
            line-height: 30px;
            height: 30px;
        }

        input[name="order_click"] {
            margin-top: 15px;
        }

        #row-total {
            background: #eee;
            color: #000;
        }

        #add-to-cart-form input[type='text'] {
            margin-top: 10px;
            height: 30px;
            line-height: 30px;
        }

        #add-to-cart-form input[type='submit'] {
            background: #000;
            border: 1px solid #000;
            margin-top: 10px;
            padding: 15px;
            display: inline-block;
            color: #fff;
        }

        #product-search {
    margin: 0px -209px 0px 0px;
    padding-bottom: 26px;
    float: right;
    margin-top: 56px;
}
        #sort-box {
            float: right;
            margin-right: 70px;
            line-height: 24px;
            height: 24px;
        }

        .img {
            width: 250px;
            height: 250px;
        }
    </style>
   <header>
    <div class="wrapper">


    </div>
    <div class="menu">
        <div class="top">
         <!-- Dieu huong tieu de -->
         <div class="navbar-header">
                    
                    <a class="navbar-brand" href="index.php"><img width="100px" height="100px" src="image/logo1.jpg" class="logo" alt=" lỗi "></a>
                </div>
                <!-- ket thuc dieu huong tieu de -->
            <div class="up">
                <ul>
                    <li>
                        <a href="index.php">

                            Trang chủ
                        </a>
                    </li>

                    <li>
                        <a href="cart.php">

                            Giỏ Hàng
                        </a>
                    </li>
                    <li>
                        <a href="sanpham.php">

                            Sản Phẩm
                        </a>
                    </li>
                    
                    <li>
                        <a href="lienhe.php">

                            Liên Hệ
                        </a>
                    </li>

                    <li>
                            
                               
                          <a href="dangki.php">
                           
                            

                            <?php

                            if(isset($_SESSION['tendangnhap'])){
                            echo"Xin chào"  .$_SESSION['tendangnhap'];
                                ?>
                                <span style="color:white;">|</span>
                                <li> <a href = 'logout.php'>Đăng Xuất</a>
                                <?php 
                            }else{
                            ?>
                                 <li> <a href = 'dangnhap.php'>Đăng Nhập</a> </li>
                            <?php
                            }
                            //  echo $_SESSION['tendangnhap'];
                            ?>
                             </a>
                        </li>

                </ul>

            </div>
            <div class="down">
                <div id="sort-box-1">
                    <form id="product-search" method="GET">
                        <input type="text" value="<?= isset($_GET['name']) ? $_GET['name'] : "" ?>" name="name" />
                        <input type="submit" value="Tìm kiếm" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    </header>
    <?php


    include './connect_db.php';
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    $error = false;
    $success = false;
    if (isset($_GET['action'])) {

        function update_cart($add = false)
        {
            foreach ($_POST['quantity'] as $id => $quantity) {
                if ($quantity == 0) {
                    unset($_SESSION["cart"][$id]);
                } else {
                    if ($add) {
                        $_SESSION["cart"][$id] = $quantity;
                    } else {
                        $_SESSION["cart"][$id] = $quantity;
                    }
                }
            }
        }

        switch ($_GET['action']) {
            case "add":
                update_cart(true);

                break;
            case "delete":
                if (isset($_GET['id'])) {
                    unset($_SESSION["cart"][$_GET['id']]);
                }

                break;
            case "submit":
                if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                    update_cart();

                } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                    if (empty($_POST['name'])) {
                        $error = "Bạn chưa nhập tên của người nhận";
                    } elseif (empty($_POST['phone'])) {
                        $error = "Bạn chưa nhập số điện thoại người nhận";
                    } elseif (empty($_POST['address'])) {
                        $error = "Bạn chưa nhập địa chỉ người nhận";
                    } elseif (empty($_POST['quantity'])) {
                        $error = "Giỏ hàng rỗng";
                    }
                    if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                        $products = mysqli_query($con, "SELECT * FROM `product` WHERE `id` IN (" . implode(",", array_keys($_POST['quantity'])) . ")");
                        $total = 0;
                        $orderProducts = array();
                        while ($row = mysqli_fetch_array($products)) {
                            $orderProducts[] = $row;
                            $total += $row['price'] * $_POST['quantity'][$row['id']];
                        }
                        $insertOrder = mysqli_query($con, "INSERT INTO `order` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES (NULL, '" . $_POST['name'] . "', '" . $_POST['phone'] . "', '" . $_POST['address'] . "', '" . $_POST['note'] . "', '" . $total . "', '" . time() . "', '" . time() . "');");
                        $orderID = $con->insert_id;
                        $insertString = "";
                        foreach ($orderProducts as $key => $product) {
                            $insertString .= "(NULL, '" . $orderID . "', '" . $product['id'] . "', '" . $_POST['quantity'][$product['id']] . "', '" . $product['price'] . "', '" . time() . "', '" . time() . "')";
                            if ($key != count($orderProducts) - 1) {
                                $insertString .= ",";
                            }
                        }
                        $insertOrder = mysqli_query($con, "INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_time`, `last_updated`) VALUES " . $insertString . ";");
                        $success = "Đặt hàng thành công";
                        unset($_SESSION['cart']);
                    }
                }
                break;
        }
    }
    if (!empty($_SESSION["cart"])) {
        $products = mysqli_query($con, "SELECT * FROM `product` WHERE `id` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
    }
    //        $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = ".$_GET['id']);
//        $product = mysqli_fetch_assoc($result);
//        $imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = ".$_GET['id']);
//        $product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
    ?>
    <div class="container">
        <?php if (!empty($error)) { ?>
            <div id="notify-msg">
                <?= $error ?>. <a href="javascript:history.back()">Quay lại</a>
            </div>
        <?php } elseif (!empty($success)) { ?>
            <div id="notify-msg">
                <?= $success ?>. <a href="sanpham.php">Tiếp tục mua hàng</a>
            </div>

        <?php } else { ?>

            <h1>Giỏ hàng</h1>
            <form id="cart-form" action="cart.php?action=submit" method="POST">
                <table>
                    <tr>
                        <th class="product-number">STT</th>
                        <th class="product-name">Tên sản phẩm</th>
                        <th class="product-img">Ảnh sản phẩm</th>
                        <th class="product-price">Đơn giá</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="total-money">Thành tiền</th>
                        <th class="product-delete">Xóa</th>
                    </tr>
                    <?php
                    if (!empty($products)) {
                        $total = 0;
                        $num = 1;
                        while ($row = mysqli_fetch_array($products)) {
                            ?>
                            <tr>
                                <td class="product-number">
                                    <?= $num++; ?>
                                </td>
                                <td class="product-name">
                                    <?= $row['name'] ?>
                                </td>
                                <td class="product-img"><img src="<?= $row['image'] ?>" /></td>
                                <td class="product-price">
                                    <?= number_format($row['price'], 0, ",", ".") ?>
                                </td>
                                <td class="product-quantity"><input type="text" value="<?= $_SESSION["cart"][$row['id']] ?>"
                                        name="quantity[<?= $row['id'] ?>]" /></td>
                                <td class="total-money">
                                    <?= number_format($row['price'] * $_SESSION["cart"][$row['id']], 0, ",", ".") ?>
                                </td>
                                <td class="product-delete"><a href="cart.php?action=delete&id=<?= $row['id'] ?>">Xóa</a></td>
                            </tr>
                            <?php
                            $total += $row['price'] * $_SESSION["cart"][$row['id']];
                            $num++;
                        }
                        ?>
                        <tr id="row-total">
                            <td class="product-number">&nbsp;</td>
                            <td class="product-name">Tổng tiền</td>
                            <td class="product-img">&nbsp;</td>
                            <td class="product-price">&nbsp;</td>
                            <td class="product-quantity">&nbsp;</td>
                            <td class="total-money">
                                <?= number_format($total, 0, ",", ".") ?>
                            </td>
                            <td class="product-delete">Xóa</td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <div id="form-button">
                    <input type="submit" name="update_click" value="Cập nhật" />
                </div>
                <hr>
                <div><label>Người nhận: </label><input type="text" value="" name="name" /></div>
                <div><label>Điện thoại: </label><input type="text" value="" name="phone" /></div>
                <div><label>Địa chỉ: </label><input type="text" value="" name="address" /></div>
                <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7"></textarea></div>
                <input type="submit" name="order_click" value="Đặt hàng" />
                <br>

            </form>
            <hr>
            <div class="Section__Container-sc-r6ysni-0 styles__StyledPaymentMethod-sc-mhfx8n-0 bVA-DDf gOWblv">
                <h3 class="Section__Title-sc-r6ysni-1 styles__StyledTitle-sc-mhfx8n-1 dMMxLl eqwnfr">Chọn hình
                    thức
                    thanh toán</h3>
                <div class="styles__StyledMethodList-sc-mhfx8n-3 kPqUSk">
                    <div><label class="styles__StyledRadioButton-sc-vf5pfi-0 gsXQMn">
                            <input type="radio" readonly="" name="payment-method" value="cod">
                            <span class="radio-fake"></span><span class="label">
                                <div class="styles__StyledLabel-sc-9jb57b-0 gsYpJq">
                                    <div class="Methodstyles__StyledMethod-sc-ya9clp-0 eydcWx"
                                        style="padding-left: 20px; margin-top: -40px;"><img src="image/t.png" width="32"
                                            height="32" alt="icon">
                                        <div class="method-content" style="padding-left: 2px; margin-top: -5px;">
                                            <div class="method-content__title"><span>Thanh toán tiền mặt khi
                                                    nhận
                                                    hàng</span></div>
                                            <div class="method-content__sub-title method-content__sub-title--undefined">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span></label></div>
                    <div><label class="styles__StyledRadioButton-sc-vf5pfi-0 gsXQMn"><input type="radio" readonly=""
                                name="payment-method" value="viettelpay" checked=""><span class="radio-fake"></span><span
                                class="label">
                                <div class="styles__StyledLabel-sc-9jb57b-0 gsYpJq">
                                    <div class="Methodstyles__StyledMethod-sc-ya9clp-0 eydcWx"
                                        style="padding-left: 20px; margin-top: -40px;"><img src="image/viettel.png"
                                            width="32" height="32" alt="icon">
                                        <div class="method-content" style="padding-left: 2px; margin-top: -5px;">
                                            <div class="method-content__title"><span>Thanh toán bằng ví Viettel
                                                    Money</span></div>
                                            <div class="method-content__sub-title method-content__sub-title--undefined">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span></label></div>
                    <div><label class="styles__StyledRadioButton-sc-vf5pfi-0 gsXQMn"><input type="radio" readonly=""
                                name="payment-method" value="momo"><span class="radio-fake"></span><span class="label">
                                <div class="styles__StyledLabel-sc-9jb57b-0 gsYpJq">
                                    <div class="Methodstyles__StyledMethod-sc-ya9clp-0 eydcWx"
                                        style="padding-left: 20px; margin-top: -40px;"><img src="image/momo.png" width="32"
                                            height="32" alt="icon">
                                        <div class="method-content" style="padding-left: 2px; margin-top: -5px;">
                                            <div class="method-content__title"><span>Thanh toán bằng ví
                                                    MoMo</span>
                                            </div>
                                            <div class="method-content__sub-title method-content__sub-title--undefined">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span></label></div>
                    <div><label class="styles__StyledRadioButton-sc-vf5pfi-0 gsXQMn"><input type="radio" readonly=""
                                name="payment-method" value="zalopay"><span class="radio-fake"></span><span class="label">
                                <div class="styles__StyledLabel-sc-9jb57b-0 gsYpJq" style="">
                                    <div class="Methodstyles__StyledMethod-sc-ya9clp-0 eydcWx"
                                        style="padding-left: 20px; margin-top: -40px;"><img src="image/zalopay.png"
                                            width="32" height="32" alt="icon">
                                        <div class="method-content" style="padding-left: 2px; margin-top: -5px;">
                                            <div class="method-content__title"><span>Thanh toán bằng ví
                                                    ZaloPay</span></div>
                                            <div class="method-content__sub-title method-content__sub-title--undefined">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span></label></div>
                    <div><label class="styles__StyledRadioButton-sc-vf5pfi-0 gsXQMn"><input type="radio" readonly=""
                                name="payment-method" value="vnpay"><span class="radio-fake"></span><span class="label">
                                <div class="styles__StyledLabel-sc-9jb57b-0 gsYpJq">
                                    <div class="Methodstyles__StyledMethod-sc-ya9clp-0 eydcWx"
                                        style="padding-left: 20px; margin-top: -40px;"><img src="image/vnpay.png" width="32"
                                            height="32" alt="icon">
                                        <div class="method-content" style="padding-left: 2px; margin-top: -5px;>
                                                <div class=" method-content__title"=""><span>Thanh toán bằng
                                                VNPAY</span>
                                        </div>

                                    </div>
                                </div>
                            </span></label></div>
                    <div><label class="styles__StyledRadioButton-sc-vf5pfi-0 gsXQMn"><input type="radio" readonly=""
                                name="payment-method" value="cybersource"><span class="radio-fake"></span><span
                                class="label">
                                <div class="styles__StyledLabel-sc-9jb57b-0 gsYpJq">
                                    <div class="Methodstyles__StyledMethod-sc-ya9clp-0 eydcWx"
                                        style="padding-left: 20px; margin-top: -40px;"><img src="image/the.png" width="32"
                                            height="32" alt="icon">
                                        <div class="method-content" style="padding-left: 2px; margin-top: -5px;>
                                                <div class=" method-content__title"=""><span>Thanh toán bằng thẻ quốc
                                                tế</span>
                                            Visa, Master, JCB</div>
                                        <div class="method-content__sub-title method-content__sub-title--undefined">
                                            <img src="image/jcb.png" height="24" width="auto">
                                        </div>
                                    </div>
                                </div>
                            </span></label></div>

                    <div class="SubListstyles__StyledWrapper-sc-3gvzx3-0 ixKANJ">
                        <div class="TokenListstyles__StyledTokenList-sc-e3o4jc-0 hEvCDj"></div><button
                            class="styles__StyledAddNewButton-sc-mhfx8n-4 haMxul"><img alt="add" src="image/themthemoi.png"
                                width="24" height="24"><span>Thêm thẻ mới</span></button>
                    </div>
                    <div class="styles__FlexRow-sc-1kbdasz-1 bSkntM"><button
                            class="Button-sc-1p6a6mz-0 styles__StyledButton-sc-1kbdasz-3 hksmFU hHWBHK"><a
                                href="viettel.php" style="text-decoration: none;">Thanh Toán</a>
                        </button></div>
                </div>
            </div>
        <?php } ?>

    </div>
</body>

</html>