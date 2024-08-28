<?php
include "#include/config.php";
include "#include/#class/Autoload.php";

$current_menu = "404";
$current_sub_menu = NULL;
$title = "Page Not Found";

include __DIR__ . '/header.php';
?>

<!-- Start 404 
    ============================================= -->
<div class="error-page-area text-center default-padding default-padding-top">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-8 offset-lg-2">
                <div class="error-box">
                    <h1>404</h1>
                    <h2>Oops! That page can’t be found.</h2>
                    <p>
                        The page you are looking for might have been removed had its name changed or its temporarily unavailable.
                    </p>
                    <a class="btn circle btn-theme-effect btn-md" href="<?= SERVER_NAME ?>">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End 404 -->

<?php
include __DIR__ . '/footer.php';
?>