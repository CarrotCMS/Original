<?php
$maindir = './';
include($maindir.'config.php');
include($maindir.'inc/viewscounter.php')
?>
<!DOCTYPE html>
<html>
<title><?php echo sitetitle; ?></title>
<?php include($maindir.'inc/heads.php'); ?>
<body>

<?php include($maindir.'inc/menubar.php'); ?>
<center>
<h1>Onderhoudsmodus is ingeschakeld.</h1>
<h3>Kom binnenkort terug.</h3>
</center>
<?php include($maindir.'inc/footer.php'); ?>
</body>
</html>
