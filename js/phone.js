const phoneText = document.querySelector('.admin-phone h1');
const adminPhone = document.querySelector('.admin-phone');

const addArticle = document.querySelector('.admin-content-add');
const removeArticle = document.querySelector('.admin-content-remove');
const editArticle = document.querySelector('.admin-content-edit');

const iconAdd = document.querySelector('.icon-add-article i');
const iconRemove = document.querySelector('.icon-remove-article i');
const iconEdit = document.querySelector('.icon-edit-article i');

const addArticleIcon = document.querySelectorAll('.close-icon');

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

function showAdd(){
    addArticle.classList.replace("admin-content-add", "admin-content-add-show");
    adminPhone.style.opacity = 0;
}

function hideAdd(){
    addArticle.classList.replace("admin-content-add-show", "admin-content-add");
    adminPhone.style.opacity = 1;
}

function showRemove(){
    removeArticle.classList.replace("admin-content-remove", "admin-content-remove-show");
    adminPhone.style.opacity = 0;
}

function hideRemove(){
    removeArticle.classList.replace("admin-content-remove-show", "admin-content-remove");
    adminPhone.style.opacity = 1;
}

function showEdit(){
    editArticle.classList.replace("admin-content-edit", "admin-content-edit-show");
    adminPhone.style.opacity = 0;
}

function hideEdit(){
    editArticle.classList.replace("admin-content-edit-show", "admin-content-edit");
    adminPhone.style.opacity = 1;
}

iconAdd.addEventListener("click", showAdd);
addArticleIcon[0].addEventListener("click", hideAdd);

iconRemove.addEventListener("click", showRemove);
addArticleIcon[1].addEventListener("click", hideRemove);

iconEdit.addEventListener("click", showEdit);
addArticleIcon[2].addEventListener("click", hideEdit);

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