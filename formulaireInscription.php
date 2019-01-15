<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=rencontre;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO login (login,pass,date) VALUES(?, ?, CURDATE())');
$req->execute(array($_POST['login'], $_POST['pass']));
header('Location: index.php');
?>




