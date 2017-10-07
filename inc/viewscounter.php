<?php
$datum = date("d-m-Y");
mysqli_query($db,"INSERT INTO `Views` (`Date`, `ip`) VALUES ('".$datum."', '".$_SERVER['REMOTE_ADDR']."');");
?>
