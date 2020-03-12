<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>BlogAC - Admin</title>
</head>
<?php 
    include 'connectbdd.php';
?>

<body>
    <h1>Le superbe pannel admin</h1>
    <form action="addarticle.php" method="POST" enctype="multipart/form-data">
        <p>Titre de l'article: <input type="text" name="titre" /></p>
        <p>Commentaire: <br /><textarea name="commentaire" rows="10" cols="50"></textarea></p>
        <input type="hidden" name="MAX_FILE_SIZE" value="20097152">
        <p>Choisissez une photo avec une taille inférieure à 20 Mo.</p>
        <input type="file" name="photo">
        <br /><br />
        <input type="submit" name="ok" value="Envoyer">
    </form>
    <script src="js/main.js"></script>
</body>

</html>