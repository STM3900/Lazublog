<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>BlogAC</title>
</head>
<?php 
    include 'connectbdd.php';
    $reponse = $bdd->query('SELECT * FROM article');
?>
<body>
    <header class="general-header">
        <aside></aside>
        <h1>Bienvenue sur mon blog !</h1>
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
                    <aside style="background-image: url('medias/<?php echo $donnees['image'] ?>.jpg');"></aside>
                    <h2>Jour <?php echo $donnees['id'] ?></h2>
                    <p><?php echo $donnees['titre'] ?></p>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>