<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./static/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">

<head>
    <meta charset="UTF-8">
    <title>Chatbot</title>
</head>

<body>
    <div class="container">
        <div class="chatbox">
            <div class="chatbox__support">
                <div class="chatbox__header">
                    <div class="chatbox__image--header">
                        <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-5--v1.png"
                            alt="image">
                    </div>
                    <div class="chatbox__content--header">
                        <h4 class="chatbox__heading--header">NATURE LIFE</h4>
                        <p class="chatbox__description--header">Hi.How can I help you?</p>
                    </div>
                </div>
                <div class="chatbox__messages">
                    <div></div>
                </div>
                <div class="chatbox__footer">
                    <input type="text" placeholder="Write a message...">
                    <button class="chatbox__send--footer send__button">
                        <i class="bi bi-send"></i> Send
                    </button>
                </div>
            </div>
            <div class="chatbox__button">
                <i class="bi bi-chat-fill custom-icon"></i>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="./static/app.js"></script>
    <script>document.addEventListener("DOMContentLoaded", function () {
            const messages = [
                "Hello, how can we assist you today?",
                "Are you looking for information on our Villas?",
                "Ask Anything you want to know about our Villas."
            ];

            const chatboxMessages = document.querySelector('.chatbox__messages');

            function addMessage(index) {
                if (index < messages.length) {
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('messages__item', 'messages__item--visitor');
                    messageDiv.textContent = messages[index];
                    chatboxMessages.appendChild(messageDiv);

                    chatboxMessages.scrollTop = chatboxMessages.scrollHeight;

                    setTimeout(() => addMessage(index + 1), 1000);
                }
            }

            addMessage(0);
        });

    </script>
</body>

</html>