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
					<p><a href="http://wave.webaim.org/report#/http://csws2015.cloudcontrolled.com" title="WEB Accessibility">Hier kannst ud meine Seite überprüfen
					<img src="http://wave.webaim.org/img/wavelogo.png" class="img-responsive" alt="Wave Logo"/></a><br />
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
						<input  id ="search" tabindex="1" class="form-control" type="text" dir="ltr" size="50" placeholder="Jetzt Suchen!" value="" name="search" autofocus></input>
					</div>
					<input class="btn btn-default" type="submit" value="Artikel-Suche" name="go" tabindex="2"></input>
					<input class="btn btn-default" type="submit" value="Volltextsuche" name="fulltext" tabindex="3"></input>
				</form>
				<p><h2>Bemerkung</h2>
					Das Barierefreie Navigieren per Tastatur hat bei der abgabe bereits funktioniert!<br />
					Die Seite war wegen vorgaben von Bootstrap nicht AAA Konform, da ich ein Dropdown Feld in der Navigation habe, wo von Bootstrap ein <code>b</code> Tag vorgegeben wird!<br />
					In dem Arbeiten mit GIT sehe ich in IBS keinen Sinn, da so etwas eher etwas für SWT ist und nicht für IBS!<br />
				</p>
			</div>
		</div>
	</main>
</body>
</html>
