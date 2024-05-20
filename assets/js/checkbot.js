const captchaTextBox = document.querySelector(".captch_box input");
const refreshButton = document.querySelector(".refresh_button");
const captchaInputBox = document.querySelector(".captch_input input");
const message = document.querySelector(".message");
const submitButton = document.querySelector(".button");
const checkbotBody = document.querySelector(".checkbot");
const checkbotbutonn = document.querySelector(".butonn");

let statusLogin = sessionStorage.getItem("status");

if (statusLogin) {
    window.location.href = "/";
}

let captchaText = null;


const generateCaptcha = () => {
    const randomString = Math.random().toString(36).substring(2, 7);
    const randomStringArray = randomString.split("");
    const changeString = randomStringArray.map((char) => (Math.random() > 0.5 ? char.toUpperCase() : char));
    captchaText = changeString.join("   ");
    captchaTextBox.value = captchaText;
};

const refreshBtnClick = () => {
    generateCaptcha();
    captchaInputBox.value = "";
    captchaKeyUpValidate();
};

const captchaKeyUpValidate = () => {
    submitButton.classList.toggle("disabled", !captchaInputBox.value);
    if (!captchaInputBox.value) message.classList.remove("active");
};


const submitBtnClick = () => {
    captchaText = captchaText
        .split("")
        .filter((char) => char !== " ")
        .join("");
    message.classList.add("active");

    if (captchaInputBox.value === captchaText) {
        message.innerText = "Captcha betul";
        message.style.color = "#826afb";

        sessionStorage.setItem("status", true);
        window.location.href = "/";

    } else {
        alert("Opp bot akses ni 🗿");

        message.innerText = "Captcha Salah";
        message.style.color = "#FF2525";
    }
};


refreshButton.addEventListener("click", refreshBtnClick);
captchaInputBox.addEventListener("keyup", captchaKeyUpValidate);
submitButton.addEventListener("click", submitBtnClick);


generateCaptcha();

function randomRGB() {
    return Math.floor(Math.random() * 256);
}

function randomColor() {
    let red = randomRGB();
    let green = randomRGB();
    let blue = randomRGB();
    return 'rgb(' + red + ',' + green + ',' + blue + ')';
}

let randomColorValue = randomColor();

refreshButton.style.backgroundColor = randomColorValue
checkbotBody.style.backgroundColor = randomColorValue
checkbotbutonn.style.backgroundColor = randomColorValue
message.style.color = randomColorValue