<?php
include 'connectbdd.php';

$aledid = $_POST['idEditArticle'];
$aled = htmlspecialchars($_POST['editContent']); 
$aled2 = htmlspecialchars($_POST['editContent2']);
$aledlegende = htmlspecialchars($_POST['legende']);



$req = $bdd->prepare('UPDATE `article` SET `description` = ?, `description2` = ?, `legende` = ?  WHERE `article`.`id` = ?');
$req->execute(array($aled, $aled2, $aledlegende,$aledid));

header('Location: admin.php');
?>