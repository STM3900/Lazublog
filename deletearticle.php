<?php
include 'connectbdd.php';

$aled = $_POST['idArticle'];


$req = $bdd->prepare('DELETE FROM `article` WHERE `article`.`id` = ? ');
$req->execute(array($aled));

header('Location: admin.php');
?>