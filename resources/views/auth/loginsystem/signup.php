<?php require 'header.php' ?>

<section class="container signup-form">
    <h3>Реєстрація</h3>
    <form action="invisible/signup-inv.php" method="post">
        <input type="text" name="name" class="form-control mb-1" placeholder="Введіть ім'я">
        <input type="text" name="email" class="form-control mb-1" placeholder="Введіть імейл">
        <input type="text" name="uid" class="form-control mb-1" placeholder="Введіть логін">
        <input type="password" name="pwd" class="form-control mb-1" placeholder="Пароль">
        <input type="password" name="pwdrepeat" class="form-control mb-1" placeholder="Повторіть пароль">
        <button type="submit" name="submit" class="w-100 btn btn-success">Зареєструватись</button>
    </form>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput"){
        echo "<p>Заповніть усі поля!</p>";
    }
    else if ($_GET["error"] == "invaliduid")
        echo "<p>Оберіть інший логін!</p>";
    else if ($_GET["error"] == "invalidemail")
        echo "<p>Оберіть іншу електронну адресу!</p>";
    else if ($_GET["error"] == "invaliduid")
        echo "<p>Паролі не співпадають!</p>";
    else if ($_GET["error"] == "invaliduid")
        echo "<p>Щось пішло не так, спробуйте ще раз!</p>";
    else if ($_GET["error"] == "usernametaken")
        echo "<p>Користувач з таким логіном вже є!</p>";
    else if ($_GET["error"] == "none")
        echo "<p>Ви успішно зареєструвалися!</p>";

}
?>
</section>




<?php require 'footer.php' ?>
