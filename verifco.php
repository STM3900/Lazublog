<?php
session_start();

$mdpCo = "1234";
$mdpUser = $_POST['mdp'];

if($mdpUser == $mdpCo){
    $_SESSION['co'] = true;
}
else{
    $_SESSION['errorco'] = true;
}

$_SESSION['animok'] = false;
header('Location: admin.php');

?>
