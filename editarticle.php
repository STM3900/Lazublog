<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>BlogAC - Modifier un article</title>
</head>
<?php 
    include 'connectbdd.php';
    $aled = $_POST['idArticleEdit'];

    $req = $bdd->prepare('SELECT * FROM article WHERE id = ?');
    $req->execute(array($aled));

    $donnees = $req->fetch();

    //header('Location: admin.php');
?>
<body>
    <a class="button-main" href="admin.php" >Annuler</a>
    <header class="article-header">
        <div>
            <aside style="background-image: url('medias/mainimg/<?php echo $donnees['image'] ?>');"></aside>
            <article>
                <h2><?php echo $donnees['id'] ?></h2>
            </article>
            <h1><?php echo $donnees['titre'] ?></h1>
        </div>
    </header>
    <section class="article-content">
        <form action="changearticle.php" method="post">
            <input type="hidden" name="idEditArticle" value="<?php echo $donnees['id'] ?>">
            <textarea name="editContent" id="" content="bonjour"><?php echo nl2br($donnees['description']); ?></textarea>
            <input type="submit" value="Enregistrer" class="button">
        </form>
    </section>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <script src="js/main.js"></script>
</body>

</html>