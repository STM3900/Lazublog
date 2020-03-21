<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Lazublog</title>
    <link rel="shortcut icon" href="medias/icon.png" type="image/x-icon">
    <meta name="theme-color" content="#E4F1FF"/>
    <title>BlogAC - Modifier un article</title>
</head>
<?php 
    include 'connectbdd.php';
    $reponse = $bdd->query('SELECT * FROM article ORDER BY id');
?>
<body>
    <header class="general-header">
        <aside></aside>
        <h1>Bienvenue sur Lazublog !</h1>
    </header>
    <div class="general-content">
        <aside></aside>
        <section class="desc">
        <p>Vous aimez les petites histoires ? Je vous propose dès la sortie d'Animal Crossing : New Horizon, de vivre
            mon aventure avec moi, à travers des petites articles que je posterais !</p>
        </section>
        <div class="timeline">
        <?php 
            while($donnees = $reponse->fetch()){
        ?>
            <div class="container left">
                <div class="content" onclick="document.location.href='article.php?id=<?php echo $donnees['id'] ?>'">
                    <aside style="background-image: url('medias/mainimg/<?php echo $donnees['image'] ?>');"></aside>
                    <h2>Chapitre <?php echo $donnees['id'] ?></h2>
                    <p><?php echo $donnees['titre'] ?></p>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <script src="js/main.js"></script>
    <footer>
        <p>Fait par <a href="https://www.theomigeat.com/" target="_blank" class="rainbow">Théo Migeat</a>~ pour toute question ou suggestion, n'hésitez pas à me contacter sur <a href="https://twitter.com/STM3900" target="_blank">twitter</a> !</p>
    </footer>
</body>
</html>