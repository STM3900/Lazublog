adminPhone.style.transition = "none";
adminPhone.style.opacity = 1;

adminPhoneH1.style.opacity = 1;
adminPhoneIcons.style.opacity = 1;
adminPhoneHome.style.opacity = 1;

setTimeout(() => {
    adminPhone.style.transition = "opacity 0.3s, transform 0.1s, width 0.3s, height 0.3s";
}, 100);

let x = window.matchMedia("(max-width: 550px)");
let x2 = window.matchMedia("(max-width: 350px)");

const checkTab = () => {
    if(x2.matches){
        adminPhone.style.height = "65vh";
        adminPhone.style.width = "95%";
    }
    else if(x.matches){
        adminPhone.style.height = "80vh";
        adminPhone.style.width = "90%";
    }
    else{
        adminPhone.style.height = "75vh";
        adminPhone.style.width = "500px";
    }
}

checkTab();
window.addEventListener('resize', checkTab);