<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../bootstrap.php';

use app\classes\Flash;
session_start();

function flash(string $index) {
    $msg = Flash::get($index);

    return "<p>{$msg}</p>";
}
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(empty($_POST['userEmail']) && empty($_POST['userPass'])) {
        Flash::set('empty', 'Preencha todos os campos!');
        
        header("refresh: 0");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash</title>
</head>
<body>
    <h1>Form</h1>
    <form action="#" method="post">
        <?= flash('empty'); ?>
    <br>
        <label for="">E-Mail:</label><br>
        <input type="email" name="userEmail" placeholder="Seu email: ">
    <br><br>
        <label for="">Password:</label><br>
        <input type="password" name="userPass" placeholder="Sua senha: ">
    <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>