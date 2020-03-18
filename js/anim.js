const adminPhoneCo = document.querySelector('.admin-phone-co');
const adminPhoneCoH1 = document.querySelector('.admin-phone-co h1');
const adminPhoneCoForm = document.querySelector('.admin-phone-co form');
const adminPhoneCoHome = document.querySelector('.admin-phone-home-co');

const adminPhoneCoFormInput = document.querySelector('.admin-phone-co form input');

function startAnim(){
    setTimeout(() => {
        adminPhoneCo.style.opacity = 1;

        adminPhoneCo.style.height = "75vh";
        adminPhoneCo.style.width = "500px";
        setTimeout(() => {
            adminPhoneCo.classList.add('lancement-anim');
            setTimeout(() => {
                adminPhoneCoH1.style.opacity = 1;
                adminPhoneCoForm.style.opacity = 1;
                adminPhoneCoHome.style.opacity = 1;
            }, 500);
        }, 100);
    }, 800);
}

startAnim();

adminPhoneCoFormInput.focus();