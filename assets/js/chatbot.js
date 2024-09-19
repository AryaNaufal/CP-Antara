const helpDeskButton = document.getElementById('helpDeskButton');
const chatContainer = document.getElementById('chatContainer');
const sendButton = document.getElementById('sendButton');
const userInput = document.getElementById('userInput');
const chat = document.getElementById('chat');

let isSending = false; // prevent spam

helpDeskButton.onclick = function () {
    chatContainer.style.display = 'block';
};

window.onclick = function (event) {
    if (event.target !== helpDeskButton && !chatContainer.contains(event.target)) {
        chatContainer.style.display = 'none';
    }
};

sendButton.onclick = function () {
    if (isSending) return;

    const inputText = userInput.value;
    if (inputText.trim() === '') return; // input cant be empty

    isSending = true; // Set send status

    chat.innerHTML += "<div class='message user-message'> <p>" + inputText + "</p></div>";
    userInput.value = '';
    chat.scrollTop = chat.scrollHeight;

    fetch('chatbot/chatbot.php?message=' + encodeURIComponent(inputText))
        .then(response => response.text())
        .then(data => {
            setTimeout(() => {
                chat.innerHTML += "<div class='message bot-message'><img src='https://i.pinimg.com/564x/28/c2/0b/28c20b3bf4e1a48334b2278d3c7fb447.jpg' class='avatar' alt='Bot Avatar'> <p>" + data + "</p></div>";
                chat.scrollTop = chat.scrollHeight;
                isSending = false;
            }, 1000);
        });

    // Delay when submit
    setTimeout(() => {
        isSending = false;
    }, 2000);
};

// Event handler for enter button
userInput.onkeydown = function (event) {
    if (event.key === 'Enter') {
        sendButton.click();
    }
};
