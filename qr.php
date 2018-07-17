<?php

include "qrlib.php";
$data=$_GET["data"];
QRcode::png($data,false,L,4,1);

?>