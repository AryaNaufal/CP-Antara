const helpDeskButton = document.getElementById('helpDeskButton');
const chatContainer = document.getElementById('chatContainer');
const sendButton = document.getElementById('sendButton');
const userInput = document.getElementById('userInput');
const chat = document.getElementById('chat');

let isSending = false;

helpDeskButton.onclick = function () {
    chatContainer.style.display = 'block';
    chat && (chat.scrollTop = chat.scrollHeight);
};

window.onclick = function (event) {
    if (event.target !== helpDeskButton && !chatContainer.contains(event.target)) {
        chatContainer.style.display = 'none';
    }
};

sendButton?.addEventListener('click', function () {
    const inputText = userInput.value.trim();
    const isEmpty = inputText === '';
    const userMessageHTML = `<div class='message user-message'><p>${inputText}</p></div>`;
    const baseUrl = window.location.protocol + '//' + window.location.hostname + (window.location.port ? ':' + window.location.port : '') + '/CP-Antara';

    isSending ? null : (isSending = true);
    isEmpty ? null : (isSending = true);

    isSending = true;

    chat.insertAdjacentHTML('beforeend', userMessageHTML);

    userInput.value = '';
    chat.scrollTop = chat.scrollHeight;


    fetch(`${baseUrl}/chatbot/chatbot.php?message=${encodeURIComponent(inputText)}`)
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.text();
        })
        .then(data => {
            setTimeout(() => {
                const botMessageHTML = `<div class='message bot-message'><img src='https://i.pinimg.com/564x/28/c2/0b/28c20b3bf4e1a48334b2278d3c7fb447.jpg' class='avatar' alt='Bot Avatar'><p>${data}</p></div>`;
                chat.insertAdjacentHTML('beforeend', botMessageHTML);
                chat.scrollTop = chat.scrollHeight;
                isSending = false;
            }, 1000);
        })
        .catch(error => {
            console.error('Error:', error);
            isSending = false;
        });
});

// Event listener untuk tombol Enter
userInput?.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        sendButton.click();
    }
});
