<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=rencontre;charset=utf8', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Suppression du message à l'aide d'une requête préparée
$req = $bdd->prepare("DELETE FROM tchat2 WHERE id ='".$_POST['idhid']."'");
$req->execute(array($_POST['idhid']));
$req->closeCursor();
?>

<?php
echo 'message supprimer id =' . htmlspecialchars($_POST["idhid"]) . '!';
header('Location: tchat.php');
?>
