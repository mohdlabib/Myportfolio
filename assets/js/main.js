// let statusLogin = sessionStorage.getItem("status");

// if (!statusLogin) {
//     window.location.href = "checkbot.html";
// }

const randomColor = document.querySelector('#randomColor')

let dataColor = [
    'assets/css/template-colors/orange.css',
    'assets/css/template-colors/blue.css',
    'assets/css/template-colors/green.css',
    'assets/css/template-colors/pink.css',
    'assets/css/template-colors/purple.css',
    'assets/css/template-colors/red.css'
];
let lastScrollTop = 0;
let ifClick = false;

document.addEventListener('click', () => {
    ifClick = true
})

function updateScrollValue() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

    // icon bottom
    if (scrollTop > 2760) {
        document.querySelector('footer').classList.add('show-footer')
    } else {
        document.querySelector('footer').classList.remove('show-footer')
    }

    if (ifClick) {
        if (scrollTop > 170) {
            let backgroundMusic = document.getElementById("backgroundMusic");
            backgroundMusic.play();
        }
    }


    if (scrollTop > lastScrollTop && scrollTop > 172) {
        document.querySelector('header .button-dark').classList.add('show-sun')
    } else {
        document.querySelector('header .button-dark').classList.remove('show-sun')
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
}

window.addEventListener('scroll', updateScrollValue);
updateScrollValue();

let randomIndex = Math.floor(Math.random() * dataColor.length);
randomColor.href = dataColor[randomIndex]

const darkMode = document.querySelector('#darkMode')
const copyYear = document.querySelector('#yearCopy')
const yearOld = document.querySelector('.about #year')
const censor = document.querySelector('.contacts .censor')
const darkSun = document.querySelector('header .button-dark')
const d = new Date();

const hitungUmur = (tanggalLahir) => {
    const today = new Date();
    const birthDate = new Date(tanggalLahir);
    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();

    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    return age;
}

const umur = hitungUmur(tanggalLahir);
copyYear.innerHTML = d.getFullYear()
yearOld.innerHTML = umur

censor.addEventListener('click', () => {
    if (censor.classList.contains('hide')) {
        censor.innerHTML = nomorNi;
        censor.classList.remove('hide');
    } else {
        censor.innerHTML = "ㅤㅤㅤ ㅤ ㅤㅤ";
        censor.classList.add('hide');
    }
})

darkSun.addEventListener('click', () => {
    if (darkSun.classList.contains('sun')) {
        darkMode.href = "assets/css/template-dark/dark.css"
        darkSun.innerHTML = '<i class="fa-solid fa-moon"></i>'
        darkSun.classList.remove('sun');
    } else {
        darkMode.href = ""
        darkSun.innerHTML = '<i class="fa-regular fa-sun"></i>'
        darkSun.classList.add('sun');
    }
})


// section portfoilio
const appPortfolio = document.querySelector('#section-works #app')
let datas = ""

dataPort.forEach((elec, i) => {

    datas += `<div class="box-item f-${elec.type} ${i > 5 ? "lebihni" : ""}">
            <div class="image">
                <a href="${elec.url}" class="has-popup-gallery">
                    <div class="imagedalam" style="background-image: url('${elec.image}');"></div>
                </a>
            </div>
            <div class="desc">
                <div class="category">${elec.type}</div>
                <a href="${elec.url}" class="name has-popup-gallery">${elec.title}</a>
            </div>
        </div>`
})

appPortfolio.innerHTML = datas
document.querySelectorAll('.lebihni').forEach(e => {
    e.classList.add('d-none')
})

// contact
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact');
    const btn = form.querySelector('.btn');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        btn.innerHTML = '🛫 flight... 🌐';
        btn.disabled = true;

        fetch('app/controller/submitContact.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                btn.innerHTML = '🛬 landed successfully! 🥳🎉';
            } else {
                btn.innerHTML = 'Error! Please try again.';
                console.error(data.message);
            }
            btn.disabled = false;
            form.reset();
        })
        .catch(error => {
            console.error('Error!', error.message);
            btn.innerHTML = 'Error! Please try again.';
            btn.disabled = false;
        });
    });
});
