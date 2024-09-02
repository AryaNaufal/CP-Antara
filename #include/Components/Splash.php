<?php
if (isset($_POST['next'])) {
    $_SESSION['splash_shown'] = true;

    // Redirect to the main page
    header('Location: /CP-Antara/');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .splash-screen {
            background-image: url('assets/img/antara/splash-background.png');
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100 splash-screen">
        <div class="text-center text-white">
            <img src="assets/img/antara/antara_logo.png" alt="ANTARA Logo" style="width: 150px;">
            <h1 class="mt-4">Selamat datang di ANTARA</h1>
            <p>Menjadi Kantor Berita yang berkelas dunia melalui penyediaan jasa berbagai produk multimedia.</p>
            <form action="" method="post">
                <button type="submit" class="btn" name="next" style="background-color: white; color: #AA0A2F; border: none; border-radius: 20px; font-weight: 700; width: 150px;">
                    Next
                </button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>