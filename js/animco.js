function startAnim(){
    setTimeout(() => {
        adminPhone.style.opacity = 1;

        checkTab();
        setTimeout(() => {
            adminPhone.classList.add('lancement-anim');
            setTimeout(() => {
                adminPhoneH1.style.opacity = 1;
                adminPhoneIcons.style.opacity = 1;
                adminPhoneHome.style.opacity = 1;
            }, 500);
        }, 100);
    }, 800);
}

startAnim();

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

window.addEventListener('resize', checkTab);