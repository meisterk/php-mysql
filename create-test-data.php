<?php
require_once('schuelerdaomysql.php');
require_once('schueler.php');

$dao = new SchuelerDAOMySQL();
$dao->create(new Schueler(null, "Anna", "Arm"));
$dao->create(new Schueler(null, "Berta", "Bein"));
$dao->create(new Schueler(null, "Carla", "Copf"));