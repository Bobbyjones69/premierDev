<!DOCTYPE HTML>
</html>
<head>
<meta charset="UTF-8"/>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<title>tchat</title>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet"  href="css/stylesTablettes.css" media="screen and (min-width:481px") />
<link rel="stylesheet"  href="css/stylesEcrans.css" media="screen and (min-width:769px") />
</head>

<body>

<div id="tchat">
<?php
try
{ $bdd = new PDO('mysql:host=localhost;dbname=rencontre;charset=utf8', 'root', '');}
catch(Exception $e)
{ die('Erreur : '.$e->getMessage());}
$reponse = $bdd->query('SELECT * FROM tchat2 ORDER BY id DESC ');
while ($donnees = $reponse->fetch())
{ ?>
  <p>
<table>
<tr>
<td style="border-radius: 15px;font-size: 14px;background-color: #F7819F;"><?php echo $donnees['login']; ?></td>
</tr>
</table>
<table>
<tr><td style="background-color:#e6f2ff;border-radius: 15px;height: 30px;"><?php echo $donnees['texte']; ?></td>
</tr>

</table>


<form name="form3" action="suppression.php" method="post">
<input id="idhid" name="idhid" type="hidden" value=<?php echo $donnees['id']; ?> >
<input name="suppression" type="submit" src="images/supprimer.png" value="x">
</form>


</p>
<?php } $reponse->closeCursor(); ?>
 
</div>
</body>