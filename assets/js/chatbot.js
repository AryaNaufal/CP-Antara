const helpDeskButton = document.getElementById('helpDeskButton');
const chatContainer = document.getElementById('chatContainer');
const sendButton = document.getElementById('sendButton');
const userInput = document.getElementById('userInput');
const chat = document.getElementById('chat');

let isSending = false; // Status untuk mengecek apakah sedang mengirim pesan

helpDeskButton.onclick = function () {
    chatContainer.style.display = 'block';
    chat.scrollTop = chat.scrollHeight;
};

window.onclick = function (event) {
    if (event.target !== helpDeskButton && !chatContainer.contains(event.target)) {
        chatContainer.style.display = 'none';
    }
};

sendButton.onclick = function () {
    if (isSending) return; // Jika sedang mengirim, keluar dari fungsi

    const inputText = userInput.value.trim();
    if (inputText === '') return; // Cek input tidak kosong

    isSending = true; // Set status mengirim

    const userMessageHTML = "<div class='message user-message'><p>" + inputText + "</p></div>";
    chat.innerHTML += userMessageHTML;
    userInput.value = ''; // Mengosongkan input
    chat.scrollTop = chat.scrollHeight;

    fetch('chatbot/chatbot.php?message=' + encodeURIComponent(inputText))
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.text();
        })
        .then(data => {
            setTimeout(() => {
                const botMessageHTML = "<div class='message bot-message'><img src='https://i.pinimg.com/564x/28/c2/0b/28c20b3bf4e1a48334b2278d3c7fb447.jpg' class='avatar' alt='Bot Avatar'><p>" + data + "</p></div>";
                chat.innerHTML += botMessageHTML;
                chat.scrollTop = chat.scrollHeight;
                isSending = false; // Reset status mengirim setelah respons diterima

            }, 1000); // Delay untuk response bot
        })
        .catch(error => {
            console.error('Error:', error);
            isSending = false; // Reset status jika terjadi kesalahan
        });
};

// Event listener untuk tombol Enter
userInput.onkeydown = function (event) {
    if (event.key === 'Enter') {
        sendButton.click();
    }
};