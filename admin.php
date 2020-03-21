<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/373a1c097b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="medias/icon.png" type="image/x-icon">
    <title>Lazublog - Admin</title>
    <title>BlogAC - Modifier un article</title>
    <meta name="theme-color" content="#E4F1FF"/>
</head>
<?php 
    session_start();

    if (!isset($_SESSION['co'])) {
        $_SESSION['co'] = false;
    }

    if (!isset($_SESSION['animok'])) {
        $_SESSION['animok'] = true;
    }

    if (!isset($_SESSION['errorco'])) {
        $_SESSION['errorco'] = false;
    }

    include 'connectbdd.php';
    $reponse = $bdd->query('SELECT * FROM article ORDER BY id');
    $reponse2 = $bdd->query('SELECT * FROM article ORDER BY id');
?>

<body>

    <?php switch($_SESSION['co']):
    case false: ?>
        <div class="admin-screen">
            <div class="admin-phone-co">
                <h1>Entrez votre mot de passe</h1>
                <form action="verifco.php" method="post">
                    <input type="password" name="mdp" id="">
                    <input type="submit" value="Valider" class="button">
                </form>
                <div class="admin-phone-home-co">
                    <i class="fas fa-home"></i>
                </div>
            </div>
        </div>
        <?php if($_SESSION['animok']): ?>
            <script src="js/anim.js"></script>
        <?php endif; ?>
        <?php if(!$_SESSION['animok']): ?>
            <script src="js/nonanim.js"></script>
        <?php endif; ?>
        <?php if($_SESSION['errorco']): ?>
            <script src="js/animerror.js"></script>
            <?php $_SESSION['errorco'] = false; ?>
        <?php endif; ?>
        <script src="js/adminphonecohome.js"></script>
    <?php break;?>
    <?php case true: ?>
    <div class="admin-add-article admin-content-add">
        <div>
            <i class="fas fa-times close-icon"></i>
            <form action="addarticle.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="titre" placeholder="Titre" />
                <textarea name="commentaire" rows="10" cols="50" placeholder="Racontez votre journée ici !"></textarea>
                    <input type="hidden" name="MAX_FILE_SIZE2" value="20097152">
                    <label for="file-upload2" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i> Image dans l'article
                    </label>
                    <input type="file" name="photo2" id="file-upload2">
                    <input type="text" name="legende" id="legende" placeholder="légende de l'image">
                    <textarea name="commentaire2" rows="10" cols="50" placeholder="Racontez la suite de votre journée ici !"></textarea>
                <input type="hidden" name="MAX_FILE_SIZE" value="20097152">
                <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Image principale
                </label>
                <input type="file" name="photo" id="file-upload">
                <input type="submit" name="ok" value="Envoyer" class="button-addarticle">
            </form>
        </div>
    </div>

    <div class="admin-remove-article admin-content-remove">
        <i class="fas fa-times close-icon"></i>
        <div>
            <h1>Quel article voulez-vous supprimer ?</h1>
            <div class="article-remove-list">
                <?php 
                while($donnees = $reponse->fetch()){
            ?>
                <form action="deletearticle.php" method="POST">
                    <input type="submit" value="">
                    <input type="hidden" name="idArticle" value="<?php echo $donnees['id'] ?>">
                    <article onclick="document.location.href='deletearticle.php'">
                        <aside style="background-image: url('medias/mainimg/<?php echo $donnees['image'] ?>');"></aside>
                        <h2><?php echo $donnees['id'] ?> - <?php echo $donnees['titre'] ?></h2>
                    </article>
                </form>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="admin-edit-article admin-content-edit">
        <i class="fas fa-times close-icon"></i>
        <div>
            <h1>Quel article voulez-vous modifier ?</h1>
            <div class="article-remove-list">
                <?php 
                while($donnees2 = $reponse2->fetch()){
            ?>
                <form action="editarticle.php" method="POST">
                    <input type="submit" value="">
                    <input type="hidden" name="idArticleEdit" value="<?php echo $donnees2['id'] ?>">
                    <article>
                        <aside style="background-image: url('medias/mainimg/<?php echo $donnees2['image'] ?>');">
                        </aside>
                        <h2><?php echo $donnees2['id'] ?> - <?php echo $donnees2['titre'] ?></h2>
                    </article>
                </form>
                <?php }?>
            </div>
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
            <div class="admin-phone-home">
                <i class="fas fa-home"></i>
            </div>
        </div>
    </div>

    <script src="js/phone.js"></script>
    <?php if($_SESSION['animok']): ?>
        <script src="js/animco.js"></script>
    <?php endif; ?>
    <?php if(!$_SESSION['animok']): ?>
        <script src="js/nonanimco.js"></script>
    <?php endif; ?>
    
    <?php break;?>
    <?php endswitch;?>

    <?php $_SESSION['animok'] = true; ?>
</body>

</html>