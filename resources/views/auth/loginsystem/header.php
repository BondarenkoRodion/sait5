<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>/Start.Prog</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <a class="navbar-brand" href="assets/logo.png">
                <img src="assets/logo.png" alt="..." height="36">
                </a>
            <!-- <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" /><use xlink:href="/assets/logo.png"></use></svg> -->
        </a>
        </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-secondary">Головна</a></li>
        <li><a href="courses.php" class="nav-link px-2">Курси</a></li>
        <li><a href="details.php" class="nav-link px-2">Детальніше</a></li>
      </ul>

      <div class="col-md-3 text-end nomarker d-flex center">
      <?php
        if (isset($_SESSION["useruid"])){
            //echo "<button type='button'>Профіль</button>";
            echo "
            <a href='profile.php'>
            <button type='button' class='btn btn-primary me-2'>Профіль</button></a>
            <li><a href='invisible/logout-inv.php' class='nav-link px-2 link-primary'>Вийти</a></li>
            ";
        }
        else {echo "
            <a href='login.php'>
            <button type='button' class='btn btn-outline-primary me-2'>Увійти</button></a>
            <a href='signup.php'>
            <button type='button' class='btn btn-primary'>Реєстрація</button></a>";}
        ?>
        
            
      </div>
    </header>
  </div>