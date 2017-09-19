<?php
$maindir = '../';
include($maindir.'config.php');
include('./check.php');
?>
<!DOCTYPE html>
<html>
<title>Back End | <?php echo sitetitle; ?></title>
<?php include($maindir.'inc/heads.php'); ?>
<body>

<?php include('./menubar.php');?>

<div class="list-group">

  <a class="list-group-item list-group-item-info">Gebruikersnaam<span class="badge">Gebruikersid</span></a>
  <?php
$result = mysqli_query($db, "SELECT * FROM USERS");
while($row = mysqli_fetch_assoc($result)){
  echo '<a class="list-group-item" href="#">'.$row['username'].'<span class="badge">'.$row['id'].'</span></a>';
}
  ?>

</div>

<script>
$(" #users ").addClass('active');
</script>
</body>
</html>
