<?php
require_once('animals.php');
use \zwierze\dzikie\zwierze as bestia;
$c = new bestia();
printf("%s<br>",$c->get_typ());
bestia::gdziejestem();
?>