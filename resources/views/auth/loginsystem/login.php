<?php require 'header.php' ?>

<section class="container signup-form">
    <h3>Вхід в аккаунт</h3>
    <form action="invisible/login-inv.php" method="post">
        <input type="text" name="uid" class="form-control mb-1"  placeholder="Введіть логін або email">
        <input type="password" name="pwd" class="form-control mb-1" placeholder="Введіть пароль">
        <button type="submit" class="w-100 btn btn-success" name="submit">Log in</button>
    </form>
    <?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput"){
        echo "<p>Заповніть усі поля!</p>";
    }
    else if ($_GET["error"] == "wronglogin")
        echo "<p>Логін або пароль невірні!</p>";
    else if ($_GET["error"] == "wrongpassword")
        echo "<p>Пароль невірний!</p>";
    else if ($_GET["error"] == "invalidemail")
        echo "<p>Оберіть іншу електронну адресу!</p>";

}
?>
</section>