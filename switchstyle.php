<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(!isset($_GET['style'])){
  setcookie('style', 'default', time()+3600*24*7, '/');
}else{
  setcookie('style', $_GET['style'], time()+3600*24*7, '/');
}
echo '<meta http-equiv="refresh" content="0; URL='.$_SERVER['HTTP_REFERER'].'">';
 ?>
