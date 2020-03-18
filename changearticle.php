<?php
include 'connectbdd.php';

$aledid = $_POST['idEditArticle'];
$aled = $_POST['editContent'];

$req = $bdd->prepare('UPDATE `article` SET `description` = ? WHERE `article`.`id` = ?');
$req->execute(array($aled, $aledid));

header('Location: admin.php');
?>