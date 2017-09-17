<link rel="stylesheet" type="text/css" href="<?php echo $maindir; ?>css/<?php
if(!isset($_COOKIE['style'])){
  setcookie('style', 'default', time()+3600*24*7, '/');
  echo 'default';
}else{
  echo $_COOKIE['style'];
}
?>.min.css">
<script src='<?php echo $maindir;?>js/jquery-3.2.1.min.js'></script>
<script src='<?php echo $maindir;?>js/bootstrap.min.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo $maindir;?>css/font-awesome.min.css"> 
