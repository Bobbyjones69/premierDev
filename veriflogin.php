<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=rencontre;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare("SELECT id, pass FROM login WHERE login = '".$_POST['login']."'");
$req->execute(array());
$resultat = $req->fetch();
if ($_POST['pass']==$resultat['pass'])
{
session_start();
$_SESSION['id'] = $resultat['id'];
$_SESSION['login'] = $_POST['login'];
header('Location: tchat.php');
}
 else{ echo "mot de passe incorecte";}   
?>
