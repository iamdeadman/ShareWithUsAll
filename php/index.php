<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Responsive Multi-Column Form</title>
		<meta name="description" content="Blueprint: Blueprint: Responsive Multi-Column Form" />
		<meta name="keywords" content="responsive form, inputs, html5, responsive, multi-column, fluid, media query, template" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<h1>Thanks For Sharing!</h1>
			</header>	
			<div class="main">
				<form class="cbp-mc-form">
					<div class="cbp-mc-column">
						<label for="first_name">First Name</label>
	  					<input type="text" id="first_name" name="first_name" placeholder="Jonathan">
	  					<label for="last_name">Last Name</label>
	  					<input type="text" id="last_name" name="last_name" placeholder="Doe">
	  					<label for="email">Email Address</label>
	  					<input type="text" id="email" name="email" placeholder="jon@doe.com">
	  					<label for="country">Country</label>
	  					<select id="country" name="country">
	  						<option>Choose a country</option>
	  						<option>France</option>
	  						<option>Italy</option>
	  						<option>Portugal</option>
	  					</select>
	  					<label for="bio">Biography</label>
	  					<textarea id="bio" name="bio"></textarea>
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="phone">Phone Number</label>
	  					<input type="text" id="phone" name="phone" placeholder="+351 999 999">
						<label for="affiliations">Affiliations</label>
	  					<textarea id="affiliations" name="affiliations"></textarea>
	  					<label>Occupation</label>
	  					<select id="occupation" name="occupation">
	  						<option>Choose an occupation</option>
	  						<option>Web Designer</option>
	  						<option>Web Developer</option>
	  						<option>Hybrid</option>
	  					</select>
	  					<label for="cat_name">Cat's name</label>
	  					<input type="text" id="cat_name" name="cat_name" placeholder="Kitty">
	  					<label for="gagdet">Favorite Gadget</label>
	  					<input type="text" id="gagdet" name="gagdet" placeholder="Annoy-a-tron">
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label>Type of Talent</label>
	  					<select id="talent" name="talent">
	  						<option>Choose a talent</option>
	  						<option>Ninja silence</option>
	  						<option>Sumo power</option>
	  						<option>Samurai precision</option>
	  					</select>
						<label for="drink">Favorite Drink</label>
	  					<input type="text" id="drink" name="drink" placeholder="Green Tea">
	  					<label for="power">Special power</label>
	  					<input type="text" id="power" name="power" placeholder="Anti-gravity">
	  					<label for="weapon">Weapon of choice</label>
	  					<input type="weapon" id="weapon" name="weapon" placeholder="Lightsaber">
	  					<label for="comments">Comments</label>
	  					<textarea id="comments" name="comments"></textarea>	
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" value="Send your data" /></div>
				</form>
			</div>
		</div>
	</body>
</html>