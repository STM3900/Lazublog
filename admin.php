<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/373a1c097b.js" crossorigin="anonymous"></script>
    <title>BlogAC - Admin</title>
</head>
<?php 
    include 'connectbdd.php';
?>

<body>
    <div class="admin-add-article admin-content-add">
        <div>
            <i class="fas fa-times"></i>
            <form action="addarticle.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="titre" placeholder="Titre"/>
                <textarea name="commentaire" rows="10" cols="50"></textarea>
                <input type="hidden" name="MAX_FILE_SIZE" value="20097152">
                <input type="file" name="photo">
                <input type="submit" name="ok" value="Envoyer">
            </form>
        </div>
    </div>

    <div class="admin-screen">
        <div class="admin-phone">
            <h1>Que voulez-vous faire ?</h1>
            <div class="admin-phone-icons">
                <article class="icon-add-article">
                    <i class="fas fa-plus-square"></i>
                </article>
                <article class="icon-remove-article">
                    <i class="fas fa-minus-square"></i>
                </article>
                <article class="icon-edit-article">
                    <i class="fas fa-pen-square"></i>
                </article>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script src="js/phone.js"></script>
</body>

</html>