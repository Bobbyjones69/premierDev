<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=rencontre;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO tchat2 (login,texte) VALUES(?, ?)');
$req->execute(array($_POST['login'], $_POST['texte']));
header('Location: index.php');
?>