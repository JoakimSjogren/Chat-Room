require("./bootstrap");

const form = document.querySelector(".message-form");
const messageContainer = document.querySelector(".message-container");
let currentComments = [];

form.addEventListener("submit", async (event) => {
    event.preventDefault();

    const formData = new FormData(form);

    fetch("/message", {
        method: "POST",
        body: formData,
    });
    fetchMessages();
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
        console.log("SAME");
        return;
    }
    console.log("NOt Same");

    let messageCount = messageContainer.children.length;
    for (let i = messageCount; i > 0; i--) {
        messageContainer.children[i - 1].remove();
    }

    currentComments = data;
    data.forEach((comment) => {
        const newComment = document.createElement("p");
        newComment.textContent = comment;
        messageContainer.appendChild(newComment);
    });
}

setInterval(fetchMessages, 5000);
fetchMessages();
