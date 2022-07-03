const form = document.querySelector('form');
usernameFeild = form.querySelector('.username');
usernameInput = usernameFeild.querySelector('input');
passwordFeild = form.querySelector('.password');
passwordInput = passwordFeild.querySelector('input');

form.onsubmit = (e) => {
    e.preventDefault();
    (usernameInput.value == "") ? usernameFeild.classList.add("shake", "error") : checkUsername();
    (passwordInput.value == "") ? passwordFeild.classList.add("shake", "error") : checkPass();

    setTimeout(() => {
        usernameFeild.classList.remove("shake");
        passwordFeild.classList.remove("shake");
    }, 500)
}

usernameInput.onkeyup = () => { checkUsername(); }
passwordInput.onkeyup = () => { checkPass(); }

function checkUsername() {
    let pattern = /^["a-zA-Z0-9"]*/;
    if (!usernameInput.value.match(pattern)) {
        usernameFeild.classList.add("error");
        usernameFeild.classList.remove("valid");
        let errorTxt = usernameFeild.querySelector(".error-txt");
        (usernameInput.value != "") ? errorTxt.innerText = "Enter a valid username" : errorText.innerText = "username can`t be blank";
    } else {
        usernameFeild.classList.remove("error");
        usernameFeild.classList.add("valid");
    }

    if (!usernameFeild.classList.contains("error") && !passwordFeild.classList.contains("error")) {
        window.location.href = form.getAttribute("action");
    }
}

function checkPass() {
    if(passwordInput.value !== "") {
        passwordFeild.classList.remove("error");
        passwordFeild.classList.add("valid");
    }

    if(!passwordFeild.classList.contains("error")) {
        window.location.href = form.getAttribute("action");
    }
}