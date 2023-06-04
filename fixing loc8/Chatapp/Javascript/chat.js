const form = document.querySelector(".typing-area");
let inputField = form.querySelector(".input-field");
let sendBtn = form.querySelector("button");
let chatBox = document.querySelector(".chat-box");


form.onsubmit = (event) => {
    // Prevents the from from submitting so that I can use Ajax
    event.preventDefault();
}

sendBtn.onclick = () => {

    let request = new XMLHttpRequest(); // creating a new XML object
    request.open("POST","php/insert-chat.php",true);
    request.onload = () => {
        if(request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
                inputField.value = ""; //once the message has been inserted then the input becomes blank
                toLastMessage();
            }
        }
    }
    // We have to send the form data with ajax to php
    let formData = new FormData(form); // formData Object
    request.send(formData);
}

chatBox.onmouseenter = () => {
    chatBox.classList.add("active");
}

chatBox.onmouseleave = () => {
    chatBox.classList.remove("active");
}

setInterval(() => {
    let request = new XMLHttpRequest(); // creating a new XML object
    request.open("POST","php/get-chat.php",true);
    request.onload = () => {
        if(request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
                let data = request.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")) {
                    toLastMessage();
                } else {

                }
            }
        }
    }
    let formData = new FormData(form); // formData Object
    request.send(formData);
},500); // this function will run frequently after 0.5 seconds

function toLastMessage() {
    chatBox.scrollTop = chatBox.scrollHeight;
}