const phoneText = document.querySelector('.admin-phone h1');
const adminPhone = document.querySelector('.admin-phone');

const iconAdd = document.querySelector('.icon-add-article i');
const iconRemove = document.querySelector('.icon-remove-article i');
const iconEdit = document.querySelector('.icon-edit-article i');

const addArticle = document.querySelector('.admin-content-add');
const addArticleIcon = document.querySelector('.admin-add-article i');

iconAdd.addEventListener("mouseover", function(){
    phoneText.textContent = "Ajouter un article";
});

iconRemove.addEventListener("mouseover", function(){
    phoneText.textContent = "Supprimer un article";
});

iconEdit.addEventListener("mouseover", function(){
    phoneText.textContent = "Modifier un article";
});

function initialText(){
    phoneText.textContent = "Que voulez-vous faire ?";
}

/*
iconAdd.addEventListener("mouseout", function(){
    initialText();
});

iconRemove.addEventListener("mouseout", function(){
    initialText();
});

iconEdit.addEventListener("mouseout", function(){
    initialText();
});*/

function showAdd(){
    addArticle.classList.replace("admin-content-add", "admin-content-add-show");
    adminPhone.style.opacity = 0;
}

function hideAdd(){
    addArticle.classList.replace("admin-content-add-show", "admin-content-add");
    adminPhone.style.opacity = 1;
}

iconAdd.addEventListener("click", showAdd);
addArticleIcon.addEventListener("click", hideAdd);