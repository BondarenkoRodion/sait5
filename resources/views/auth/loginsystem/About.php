<?php require 'header.php' ?>
<div class="container">
<h3> Надішліть ваш відгук </h3>
<form action="check.php" method="post" class="mb-5">
    <input  type="email" name="email" placeholder="Введіть Email" class="form-control mb-1">
    <textarea name="message" class="form-control mb-1" placeholder="Введіть ваше повідомлення"></textarea>
        <button  type="submit" name="send" class="w-100 btn btn-success">Відправити</button>
</form>
</div>

<?php require 'footer.php' ?>