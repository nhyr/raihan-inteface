<?php

require_once 'Gitar.php';
require_once 'Piano.php';
require_once 'Seruling.php';
require_once 'Pianika.php';

$m1 = new Gitar();
$m2 = new Piano();
$m3 = new Seruling();
$m4 = new Pianika();

$m1 -> petik();
$m2 -> tekan();
$m3 -> tiup();
$m4 -> tiup();
$m4 -> tekan();

?>