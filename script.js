'use strict'

function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if(username == "") {
        alert('username is required');
    }else if(password == "") {
        alert('password is required');
    }else if(password.length < 6) {
        alert('password is less than 6 charaters');
    } else{
        alert('thanks for logging our website');
        window.location = "edris01.github.com";
    }
}