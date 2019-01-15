<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8"/>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<title>tchat</title>

<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet"  href="css/stylesTablettes.css" media="screen and (min-width:481px") />
<link rel="stylesheet"  href="css/stylesEcrans.css" media="screen and (min-width:769px") />

</head>

<body>

<?php 
session_start();
if (isset($_SESSION['id']) AND isset($_SESSION['login']))
{
    echo 'Bonjour ' . $_SESSION['login'];
}
else
{
echo "connecter vous";
}
?>

<div id="connection">
<form name="form2" action="veriflogin.php" method="post">
<ol>
<li><input type="text" placeholder="login" name="login"></li>
<li><input name="pass" type="password"></li>
<input name="soumission"  type="image" src="images/bouton1.png" value="envoyer">
<!-- <li><input name="annulation" type="reset" value="effacer"></li> -->
</ol>
</div>
 </form>





    <div id="contenu1">
	<p>formulaire d'envoi de message</p>
	<form name="form2" action="formulaire2.php" method="post">
	<ol>
		<li><input id="login" type="hidden" name="login" value= <?php echo $_SESSION['login'];?> ></li>
		<li><textarea name="texte" rows="2" cols="20"></textarea></li>
		<input name="soumission"  type="image" src="images/bouton1.png" value="envoyer">
		<!-- <li><input name="annulation" type="reset" value="effacer"></li> -->
	</ol>
	</div>
 	</form>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
 $(document).ready(function() {
 	 //$("#responsecontainer").load("demandeAtraiter.php");
   var refreshId = setInterval(function() {
      $("#responsecontainer").load('contenu.php?randval='+ Math.random());
   }, 11450);
   $.ajaxSetup({ cache: false });
});
</script>
</head>
<body>
<div id="responsecontainer">
<?php include('contenu.php');

 ?>
</div>


</body>
</html>