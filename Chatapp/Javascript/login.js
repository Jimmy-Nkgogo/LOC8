const form = document.querySelector(".login form");
continueBtn =  form.querySelector(".button input");
errorText = document.querySelector(".error-txt");

form.onsubmit = (event) => {
    // Prevents the from from submitting so that I can use Ajax
    event.preventDefault();
}

continueBtn.onclick = () => {
    // Ajax
    let request = new XMLHttpRequest(); // creating a new XML object
    request.open("POST","php/login.php",true);
    request.onload = () => {
        if(request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
                let data = request.response;
                if (data == "success") {
                    location.href = "../landing page/landing.php";
                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    // We have to send the form data with ajax to php
    let formData = new FormData(form); // formData Object
    request.send(formData);
}