@extends('layouts.main')
@section('content')
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
<!-- <div class="container form">
<h3> Реєстрація </h3>
<form class="" action="" method="post" autocomplete="off" class="mb-5">
    <label for="username"> </label>
    <input type="text" name="username" class="form-control mb-1" placeholder="Ім'я користувача" id="username" required value=""></input>
    <label for="email"> </label>
    <input type="email" name="email" placeholder="Email" class="form-control mb-1" id="email" required value="">
    <label for="password"> </label>
    <input name="password" class="form-control mb-1" placeholder="Пароль" id="password" required value=""></input>
    <label for="password">Підтвердіть пароль : </label>
    <input type="password" class="form-control mb-1" name="confirmpassword" id = "confirmpassword" required value=""> <br>
        <button  type="submit" name="send" class="w-100 btn btn-success">Зареєструватись</button>
</form>
</div> -->

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
@endsection