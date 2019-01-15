
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