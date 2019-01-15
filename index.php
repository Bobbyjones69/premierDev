<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8"/>
<title>Rencontre sans photo</title>
<!--[if lt IE 9]>
    <script src="components/html5shiv/html5shiv.js"></script>
<![endif]-->

<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet"  href="css/stylesTablettes.css" media="screen and (min-width:481px") >
<link rel="stylesheet"  href="css/stylesEcrans.css" media="screen and (min-width:769px") >

</head>

<body>
	
	<div id="divheader">
	</div>

	<div id="menu">
	</div>

	<div id="contenu1">
	<p>contenu1</p>
	<a href="tchat.php" lang="fr">Tchat</a>
	<img src="images/img1.jpg" alt="" />
	</div>

	<div id="contenu2">
	<p>inscription</p>
	
	<form name="form1" action="formulaire.php" method="post">
	<ol>
		<li><input type="text" placeholder="login" name="login"></li>
		<li><input type="text" placeholder="password" name="passwd"></li>
		<li><input type="text" placeholder="nom" name="nom"></li>
		<li><input type="text" placeholder="localisation" name="localisation"></li>
		<li><input type="text" placeholder="commentaire" name="com"></li>
		<li> <input name="annulation" type="reset" value="effacer"> </li>
		<li> <input name="soumission" type="submit" value="envoyer"> </li>

	</ol>
    </form>
	</div>

<div id="contenu3">
<p>contenu3</p>
	
<?php
try
{ $bdd = new PDO('mysql:host=localhost;dbname=rencontre;charset=utf8', 'root', 'root');}
catch(Exception $e)
{ die('Erreur : '.$e->getMessage());}
$reponse = $bdd->query('SELECT * FROM membre');
while ($donnees = $reponse->fetch())
{ ?>
  <p>
<table>
<tr>
    <td><?php echo $donnees['login']; ?></td>
    <td><?php echo $donnees['passwd']; ?></td>
    <td><?php echo $donnees['nom']; ?></td>
    <td><?php echo $donnees['localisation']; ?></td>
    <td><?php echo $donnees['com']; ?></td>
</tr>
</table>
</p>
<?php }
$reponse->closeCursor(); ?>
</div>

	<div id="contenu4">
	<p>contenu4</p>
	</div>

	<div id="basdepage">
	</div>

</body>
</html>