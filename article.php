<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/373a1c097b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="medias/icon.png" type="image/x-icon">
    <meta name="theme-color" content="#E4F1FF"/>
</head>
<?php 
    include 'connectbdd.php';

    $articleIDS = $bdd->query('SELECT id FROM `article` ORDER BY id DESC');
    $lastArticle = $articleIDS->fetch();

    //On règle la variable de la première id à 1, c'est grace à elle qu'on pourra parcourir notre tableau
    $idArticle = 1;
    if (isset($_GET['id'])) {
        //Si la id existe on la règle à sa valeur dans l'url (si id = 7 alors $idArticle = 7)
        $idArticle = intval($_GET['id']);
    }

    // On vérifie qu'on est pas en dehors du tableau 
    //(par exemple si l'utilisateur rentre dans l'url id=0 cela le redirigera vers la première id)
    if ($idArticle < 0) {
        header('Location: ?id=1');
        die();
    }

    //si id de l'article est plus grand que le maximum, redirige vers ce maximum
    if ($idArticle > $lastArticle[0]) {
        header('Location: ?id='.$lastArticle[0]);
        die();
    }


    $req = $bdd->prepare('SELECT * FROM article WHERE id = ?');
    $req->execute(array($idArticle));

    $donnees = $req->fetch();

?>
<title>Lazublog - Chapitre <?php echo $idArticle; ?></title>
<body>
    <a class="button-main" href="index.php" ><i class="fas fa-home"></i></a>
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
        <p><?php echo nl2br($donnees['description']); ?></p>
    </section>
    <section class="article-content-image">
        <div>
            <img src="medias/articleimg/<?php echo $donnees['imagearticle'] ?>" alt="">
            <p><?php echo $donnees['legende'] ?></p>
        </div>
    </section>
    <section class="article-content">
        <p><?php echo nl2br($donnees['description2']); ?></p>
    </section>
    <section class="article-buttons">
        <div>
            <?php if($idArticle == 0): ?>
                <a href="?id=<?php echo $idArticle +1 ?>" class="button next">Chapitre suivant</a>
            <?php 
                endif;
                if($idArticle == $lastArticle[0]):
            ?>
                <a href="?id=<?php echo $idArticle -1 ?>" class="button back">Chapitre précedent</a>
            <?php 
                endif; 
                if($idArticle > 0 && $idArticle != $lastArticle[0]):
            ?>
                <a href="?id=<?php echo $idArticle -1 ?>" class="button back">Chapitre précedent</a>
                <a href="?id=<?php echo $idArticle +1 ?>" class="button next">Chapitre suivant</a>
            <?php endif;  ?>
        </div>
    </section>
    <script src="js/main.js"></script>
    <footer>
        <p>Fait par <a href="https://www.theomigeat.com/" target="_blank" class="rainbow">Théo Migeat</a>~ pour toute question ou suggestion, n'hésitez pas à me contacter sur <a href="https://twitter.com/STM3900" target="_blank">twitter</a> !</p>
    </footer>
</body>

</html>