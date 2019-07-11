<?php
include "logout.php";
include "auth_user.php";
include "login.php";
include "comments.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form method="post" class="login">
    <div><?= $status ?></div>
    <?php if (!$_SESSION['isAuth']) : ?>
        <p>Логин</p>
        <input type="text" name="login">
        <p>Пароль</p>
        <input type="password" name="password">
        <input value="Войти" type="submit">
    <?php else : ?>
        <p>Добро пожаловать, <b><?= $_SESSION['user_name'] ?></b></p>
        <input value="Выйти" type="submit" name="logout">
    <?php endif; ?>
</form>
<div id="app">
    <header>
        <div class="header-flex">
            <div class="logo">E-shop</div>
            <div class="cart">
                <search></search>
                <button class="btn-cart" type="button" @click="showCart = !showCart">Корзина</button>
                <cart
                        :cart-items="cartItems"
                        :img="imgCart"
                        :visibility="showCart"
                        @remove="remove"></cart>
            </div>
        </div>
    </header>
    <main>
        <products :products="filtered" :img="imgCatalog" @add-product="addProduct"></products>
    </main>
    <div class="comments">
        <form action="" method="post" class="left-comments">
            <p>Оставьте комментарий: </p>
            <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
            <input type="submit" value="Отправить комментарий">
        </form>
        <div class="right-comments">
            <p>Комментарии: </p>
            <p><i><?php echo file_get_contents('comments.txt') ?><br/></i></p>
        </div>
    </div>
</div>
<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"
        integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="js/CartComp.js"></script>
<script src="js/ProdComp.js"></script>
<script src="js/SearchComp.js"></script>
<script src="js/main.js"></script>
</body>
</html>

