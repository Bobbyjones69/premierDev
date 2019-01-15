<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=rencontre;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO membre (login, passwd,nom,localisation,com) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['login'], $_POST['passwd'], $_POST['nom'], $_POST['localisation'], $_POST['com']));
header('Location: index.php');
?>