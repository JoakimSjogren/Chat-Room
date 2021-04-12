require("./bootstrap");

const form = document.querySelector(".message-form");

form.addEventListener("submit", async (event) => {
    event.preventDefault();

    const formData = new FormData(form);

    console.log(formData);
    fetch("/message", {
        method: "POST",
        body: formData,
    });
    const res = await fetch("/api/message");
    const data = await res.json();
    console.log(data);
});

function fetchMessages() {
    fetch("/")
        .then((response) => response.json())
        .then((messages) => {
            console.log(messages);
        });
}

// setInterval(fetchMessages, 1000);
