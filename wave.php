<!DOCTYPE html>
<html lang="de">
<head>
	<title>SauerIT</title>
	<?php include('php/layout/head.php');?>
</head>
<body>
	<?php include('php/layout/navbar.php');?>
	<main class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<article>
					<h1>Wave Web Accessibility</h1>
					<p><a href="http://wave.webaim.org/report#/http://csws2015.cloudcontrolled.com" title="WEB Accessibility">Hier kannst ud meine Seite überprüfen</a></p>
					<img src="http://wave.webaim.org/img/wavelogo.png" class="img-responsive" alt="Wave Logo"/><br />
					<a href="http://www.w3.org/WAI/WCAG2AAA-Conformance"
					title="Explanation of WCAG 2.0 Level Triple-A Conformance">
					<img height="32" width="88" 
					src="http://www.w3.org/WAI/wcag2AAA"
					alt="Level Triple-A conformance, 
					W3C WAI Web Content Accessibility Guidelines 2.0"></a>
				</article>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<h1>Wikipedia Stichwortsuche:</h1>

				<form id="searchbox" class="searchbox" action="http://de.wikipedia.org/wiki/Spezial:Suche" name="searchbox">
					<div class="form-group">
						<label for="search">Suche:</label>
						<input  id ="search" tabindex="0" class="form-control" type="text" dir="ltr" size="50" placeholder="Jetzt Suchen!" value="" name="search"></input>
					</div>
					<input class="btn btn-default" type="submit" value="Artikel-Suche" name="go"></input>
					<input class="btn btn-default" type="submit" value="Volltextsuche" name="fulltext"></input>
				</form>
			</div>
		</div>
	</main>
</body>
</html>
