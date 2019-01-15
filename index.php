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
    echo '<br><a href="deconnection.php">deconnection</a>';
    include 'message.php';

}
else
{
echo '<a href="inscription.php">inscription</a><br>';
echo "connecter vous :)";
include 'connection.html';
}
?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
 $(document).ready(function() {
 	 //$("#responsecontainer").load("demandeAtraiter.php");
   var refreshId = setInterval(function() {
      $("#responsecontainer").load('contenu.php?randval='+ Math.random());
   }, 1450);
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