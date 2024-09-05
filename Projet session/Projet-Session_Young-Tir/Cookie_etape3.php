<!DOCTYPE html>
<html lang="fr">
<head>
<title>Cookie étape 3</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
<link rel="stylesheet" type="text/css" href="css/styleLiens.css" />
<style>
	img {float:right;}
	<?php
		$image = "./Image/Quest2.webp";
	
		if (ISSET($_COOKIE['couleur'])) {
			echo "body {background-color:".$_COOKIE['couleur']."";
		} 
		if (ISSET($_COOKIE['image'])) {
			$image = "./Image/".$_COOKIE['image'].".webp";
		}

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
	<h2>Étape 3 : cookies disponibles</h2>
	<h3><a href="Cookie_etape1.php">Étape 1</a></h3>
	<h3><a href="index.php">Maison</a></h3>

</body>
</html>