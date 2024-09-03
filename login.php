<?php
session_start();
include "#include/config.php";
include "#include/#class/Autoload.php";
include  "vendor/autoload.php";

use App\AuthService;

$auth = new AuthService();
?>

<div class="container">
    <h1><?= isset($_SESSION['user_id']) ? "Welcome " . $_SESSION['user_name'] : 'Anda Belum Login. Silahkan Login Terlebih dahulu' ?></h1>
    <a href="<?= $auth->login() ?>">
        <img src=" assets/img/antara/google_login_btn.png" alt="google button">
    </a>
    <br>
    <button><a href="logout.php">Logout</button>
</div>