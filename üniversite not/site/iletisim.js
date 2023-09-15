const form = document.getElementById("form");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const message = document.getElementById("message");
const namesur = document.getElementById("namesur");
const fakebtn = document.getElementById("fakebtn");
const active = document.querySelector(".active");

function error(input, message) {

    input.className = 'form-control is-invalid';
    const div = input.nextElementSibling;
    div.innerText = message;
    div.className = 'invalid-feedback';
    
}





function success(input, message) {

    const div = input.nextElementSibling;
    div.innerText = message;
    
}





form.addEventListener('submit', function(e) {

    e.preventDefault();


    if(email.value  === "") {
        error(email, "Mail gerekli.");
    } else {
        success(email, "✔️");
    }

    if(namesur.value  === "") {
        error(namesur, "İsim Soyisim gerekli.");
    } else {
        success(namesur, "✔️");
    } 

    if(phone.value  === "") {
        error(phone, "Telefon 10 karakterli olmalı.");
    } else {
        success(phone, "✔️");
    } 

    if(message.value  === "") {
        error(message, "Mesajınız gerekli.");
    } else {
        success(message, "✔️");
    } 



    if(!message.value === ""){

        active.classList.remove("none");

    }




})