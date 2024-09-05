<!DOCTYPE html>
<html lang="fr">
<head>
<title>cookies</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
<link rel="stylesheet" type="text/css" href="css/styleLiens.css" />
<style>
	img {float:right;}
	<?php
		$image = "./Image/Quest2.webp"; 
		if (ISSET($_COOKIE['couleur'])) {
			echo "body {background-color:".$_COOKIE['couleur']."";	}
		if (ISSET($_COOKIE['image'])) {
			$image = "./Image/".$_COOKIE['image'].".webp";}

		$image = "./Image/Beats Solo3.jpg";
		if (ISSET($_COOKIE['couleur'])) {
			echo "body {background-color:".$_COOKIE['couleur']."";}
		if (ISSET($_COOKIE['image'])) {
			$image = "./Image/".$_COOKIE['image'].".jpg";}

			$image = "./Image/Viper.jpeg";
			if (ISSET($_COOKIE['couleur'])) {
				echo "body {background-color:".$_COOKIE['couleur']."";}
			if (ISSET($_COOKIE['image'])) {
				$image = "./Image/".$_COOKIE['image'].".jpeg";}

	?>
</style>
</head>
<body >
	<h1>Préférence avec cookies</h1>
	<img alt="" src="<?php echo $image;?>" height="80" />
	<h2>Étape 1 : couleur et produit </h2>
	<form action="cookie_etape2.php" method="post">
		<label for="ma_couleur">Couleur hexadécimale préférée :</label>
		<input type="text" id="ma_couleur" name="ma_couleur" value="#" />
		<label for="mon_produit">Produit préféré : </label>
		Produit 1
		<input type="radio" id="mon_produit" name="mon_produit" checked="checked" value="produit" />
		Produit 2
		<input type="radio" id="mon_produit" name="mon_produit"  value="produit" />
		<input type="submit" value="Étape suivante" />
	</form>
	<h3><a href="index.php">Maison</a></h3>
</body>
</html>