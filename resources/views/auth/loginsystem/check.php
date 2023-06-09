<?php
    //print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if(trim($email) == '')
        $error = 'Введіть ваш email';
    else if(trim($message) == '')
        $error = 'Введіть ваше повідомлення';
    else if(strlen($message) <10)
        $error = 'Повідомлення має бути довше 10 символів';

    if($error != '') {
        echo $error;
        exit;
    }

    $subject = "=?utf-8-b?".base64_encode("Тестове повідомлення")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=uft-8\r\n";

    mail('dpo120000@gmail.com', $subject, $message, $headers);

    header('Location: about.php')
?>