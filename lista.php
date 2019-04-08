<?php
require_once('domestic.php');
require_once('wild.php');
$a=new zwierze();
printf("%s\n",$a->get_type());
$b=new dzikie\zwierze();
printf("%s\n",$b->get_type());
use dzikie\zwierze as bestia;
$c=new bestia();
printf("%s\n",$c->get_type());
?>