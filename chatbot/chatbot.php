<?php
// chatbot.php
if (isset($_GET['message'])) {
    $userMessage = strtolower(trim($_GET['message']));
    
    sleep(1);

    $command = [
        'halo' => 'Halo! Apa kabar?',
        'hai' => 'Hai! Apa kabar?',
        'baik' => 'Alhamdulillah!',
        'apa' => 'Saya adalah chatbot sederhana. Bagaimana saya bisa membantu Anda?',
        'terima kasih' => 'Sama-sama! Jika ada yang lain, silakan tanya.',
        'terimakasih' => 'Sama-sama! Jika ada yang lain, silakan tanya.',
        'bye' => 'Selamat tinggal! Semoga hari Anda menyenangkan.',
        'see you' => 'Selamat tinggal! Semoga hari Anda menyenangkan.',
    ];

    if (array_key_exists($userMessage, $command)) {
        echo $command[$userMessage];
    } else {
        echo "Maaf, saya tidak mengerti.";
    }
}
