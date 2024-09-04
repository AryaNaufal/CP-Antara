<?php
session_start();
include "#include/config.php";
include "#include/#class/Autoload.php";
include  "vendor/autoload.php";

use App\AuthService;

$auth = new AuthService();

// Meta data
$current_menu = "";
$current_sub_menu = NULL;
$title = "Login";

include_once __DIR__ . '/header.php';
?>
<section class="login-area">
    <div class="login-container default-padding">
        <div class="login-wrapper">
            <img class="antara-logo" src="assets/img/antara/antara_logo.png" alt="ANTARA Logo">
            <a href="<?= $auth->login() ?>">
                <img src=" assets/img/antara/google_login_btn.png" alt="google button">
            </a>
        </div>
    </div>
</section>