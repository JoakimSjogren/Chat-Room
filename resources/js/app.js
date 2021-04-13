require("./bootstrap");

const form = document.querySelector(".message-form");
const messageInput = document.querySelector(".message-input");
const messageContainer = document.querySelector(".message-container");
let currentComments = [];
if (form !== null) {
    //Checks when message has been sent
    form.addEventListener("submit", async (event) => {
        event.preventDefault();

        const formData = new FormData(form);

        fetch("/message", {
            method: "POST",
            body: formData,
        });
        fetchMessages();
        messageInput.value = "";
    });

    async function fetchMessages() {
        let res = await fetch("/api/message");
        let data = await res.json();

        let sameComments = false;
        for (let i = 0; i < currentComments.length; i++) {
            if (data[i] !== currentComments[i]) {
                sameComments = false;
                break;
            }
            sameComments = true;
        }
        if (sameComments) {
            return;
        }

        let messageCount = messageContainer.children.length;
        for (let i = messageCount; i > 0; i--) {
            messageContainer.children[i - 1].remove();
        }

        currentComments = data;
        data.forEach((comment) => {
            const newComment = document.createElement("p");
            newComment.textContent = comment;
            messageContainer.insertBefore(
                newComment,
                messageContainer.firstChild
            );
        });
    }

    fetchMessages();
    setInterval(fetchMessages, 1000);
}
