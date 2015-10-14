<?php
	echo '
	<nav role="navigation" class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><img src="img/logo.svg" title="Logo" style="margin-top:-11px;height:64px;"/></a>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Start</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Meine Webseiten <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="http://www.bums.fellingshausen.de">BuMs Fellingshausen</a></li>
                        <li><a href="http://www.jf.fellingshausen.de">JF Fellingshausen</a></li>
                    </ul>
                </li>
				<li><a href="http://wiki.it-sauer.de">Wiki</a></li>
                <li><a href="about.php">&Uuml;ber</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="impressum.php">Impressum</a>
            </ul>
        </div>
    </nav>
			';

?>