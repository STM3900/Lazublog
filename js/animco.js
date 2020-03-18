function startAnim(){
    setTimeout(() => {
        adminPhone.style.opacity = 1;

        adminPhone.style.height = "75vh";
        adminPhone.style.width = "500px";
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