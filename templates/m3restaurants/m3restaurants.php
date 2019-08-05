<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>m3 RESTAURANTS</title>
	<meta name="description" content="">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
	<style>
		html, body {margin:0;color:#706F6F;font-family: 'Open Sans';font-style: normal;font-weight: 400;height: 100%;font-size: 16px;}
		.main_container {display:table;width: 100%;height: 100%;}
		.content {display:table-cell;vertical-align: middle;text-align: center;padding-bottom: 200px;padding: 0 15px;}
		h1 {color:#ffffff;font-size: 12px;height: 0;margin: 0;}
		img.m3restaurants-logo {margin-bottom: 30px;max-width: 100%;height: auto;}
		h2 {color:#706F6F;font-size: 20px;font-weight: 700; margin-top: 25px;margin-bottom: 25px;}
		p {margin-top: 5px;margin-bottom: 5px;}
		a {color:#EB2F56;}
		footer {position: fixed; bottom: 0; width: 100%;text-align: center;margin:20px 0;font-size: 12px;}
	</style>
</head>
<body>
	
	<div class="main_container"><? print_r(get_field_object('field_5d4824f8e8bba'));?>
	  	<div class="content">
			<h1>m3 RESTAURANTS</h1>
			<img class="m3restaurants-logo" width="300" src="<?php echo plugin_dir_url( __DIR__ );?>/m3restaurants/m3restaurants-logo.png" alt="m3 Restaurants" />
			<h2>Nous arrivons bientôt !</h2>
			<p>
				En attendant et pour en découvrir un peu plus sur notre activité<br>
			</p>
			<a href="https://m-3.group/nos-activites/m3-restaurants/">Suivez ce lien</a>
	  	</div>
	</div>
	<footer>
		2019 © m3 Groupe
	</footer>
</body>
</html>
