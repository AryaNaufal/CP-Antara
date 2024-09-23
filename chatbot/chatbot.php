<?php
session_start();

if (isset($_GET['message'])) {
    $userMessage = strtolower(trim($_GET['message']));

    sleep(1); // Delay response

    $command = [
        'halo' => "Halo! $_SESSION[user_name], Apa kabar?",
        'hai' => "Hai! $_SESSION[user_name], Apa kabar?",
        'baik' => 'Alhamdulillah!',
        'apa' => 'Saya adalah chatbot sederhana. Bagaimana saya bisa membantu Anda?',
        'terima kasih' => 'Sama-sama! Jika ada yang lain, silakan tanya.',
        'terimakasih' => 'Sama-sama! Jika ada yang lain, silakan tanya.',
        'bye' => 'Selamat tinggal! Semoga hari Anda menyenangkan.',
        'see you' => 'Selamat tinggal! Semoga hari Anda menyenangkan.',
    ];

    $botResponse = array_key_exists($userMessage, $command) ? $command[$userMessage] : "Maaf, saya tidak mengerti.";

    // Memasukan user message ke chat history
    $_SESSION['chat_history'][] = "<div class='message user-message'><p>$userMessage</p></div>";

    // Memasukan bot message ke chat history
    $_SESSION['chat_history'][] = "<div class='message bot-message'><img src='https://i.pinimg.com/564x/28/c2/0b/28c20b3bf4e1a48334b2278d3c7fb447.jpg' class='avatar' alt='Bot Avatar'><p>$botResponse</p></div>";

    echo $botResponse;
}
