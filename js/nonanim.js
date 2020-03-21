const adminPhoneCo = document.querySelector('.admin-phone-co');
const adminPhoneCoH1 = document.querySelector('.admin-phone-co h1');
const adminPhoneCoForm = document.querySelector('.admin-phone-co form');
const adminPhoneCoHome = document.querySelector('.admin-phone-home-co');

const adminPhoneCoFormInput = document.querySelector('.admin-phone-co form input');

let x = window.matchMedia("(max-width: 550px)");
let x2 = window.matchMedia("(max-width: 350px)");

const checkTab = () => {
    if(x2.matches){
        adminPhoneCo.style.height = "65vh";
        adminPhoneCo.style.width = "95%";
    }
    else if(x.matches){
        adminPhoneCo.style.height = "80vh";
        adminPhoneCo.style.width = "90%";
    }
    else{
        adminPhoneCo.style.height = "75vh";
        adminPhoneCo.style.width = "500px";
    }
}

checkTab();
window.addEventListener('resize', checkTab);

adminPhoneCo.style.transition = "none";
adminPhoneCo.style.opacity = 1;

adminPhoneCoH1.style.transition = "none";
adminPhoneCoH1.style.opacity = 1;

adminPhoneCoForm.style.transition = "none";
adminPhoneCoForm.style.opacity = 1;

adminPhoneCoHome.style.transition = "none";
adminPhoneCoHome.style.opacity = 1;

adminPhoneCoFormInput.focus();

