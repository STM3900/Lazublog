<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="medias/icon.png" type="image/x-icon">
    <title>BlogAC - Modifier un article</title>
    <meta name="theme-color" content="#E4F1FF"/>
</head>
<?php 
    include 'connectbdd.php';
    $aled = $_POST['idArticleEdit'];

    $req = $bdd->prepare('SELECT * FROM article WHERE id = ?');
    $req->execute(array($aled));

    $donnees = $req->fetch();
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
    <section class="article-content-edit">
        <form action="changearticle.php" method="post">
            <input type="hidden" name="idEditArticle" value="<?php echo $donnees['id'] ?>">
            <article>
                <textarea name="editContent" id="" content="bonjour"><?php echo $donnees['description']; ?></textarea>
            </article>
            <section class="article-content-image-edit">
                <div>
                    <img src="medias/articleimg/<?php echo $donnees['imagearticle'] ?>" alt="">
                    <input type="text" name="legende" id="" value="<?php echo $donnees['legende'] ?>">
                </div>
            </section>
            <article>
                <textarea name="editContent2" id="" content="bonjour"><?php echo $donnees['description2']; ?></textarea>
            </article>
            <input type="submit" value="Enregistrer" class="button">
        </form>
    </section>
    <footer>
        <p>Fait par <a href="https://www.theomigeat.com/" target="_blank" class="rainbow">Théo Migeat</a>~ pour toute question ou suggestion, n'hésitez pas à me contacter sur <a href="https://twitter.com/STM3900" target="_blank">twitter</a> !</p>
    </footer>
</body>

</html>