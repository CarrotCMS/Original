<?php
$maindir = './';
include($maindir.'config.php');
?>
<!DOCTYPE html>
<html>
<title><?php echo sitetitle; ?></title>
<?php include($maindir.'inc/heads.php'); ?>
<body>

<?php include($maindir.'inc/menubar.php'); ?>
<h1>This is a heading</h1>
<p>This is a paragraph.</p>
<?php include($maindir.'inc/footer.php'); ?>
</body>
</html>
