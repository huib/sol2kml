<?php
// JF

// Importation des positions des bateaux depuis MP
// Les donn�es de latitude et longitude sont en syst�me d�cimal comme dans Google Maps. et Google Earth.

// Utilise la classe SimpleXML pour r�cup�rer les donn�es
// NON supporte par de nombreux serveurs
// require_once( "import_positions_simplexml.php" );

// Utilise le script xmlize.php. Peu souple mais support� par tout serveur
// Si SimpleXML est support� utiliser import_positions_simplexml.php car plus souple

require_once( "import_positions_xmlize.php" );


?>