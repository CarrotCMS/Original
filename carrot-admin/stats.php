<?php
$maindir = '../';
include($maindir.'config.php');
include('./check.php');

?>
<!DOCTYPE html>
<html>
<title>Back End | <?php echo sitetitle; ?></title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.0/chartist.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.0/chartist.min.css" />

<?php include($maindir.'inc/heads.php'); ?>
<body>

<?php include('./menubar.php');?>
<?php
$one = date("d-m-Y");
$two = date("d-m-Y", strtotime("-1 days"));
$three = date("d-m-Y", strtotime("-2 days"));
$four = date("d-m-Y", strtotime("-3 days"));
$five = date("d-m-Y", strtotime("-4 days"));
$onecount = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$one."'"));
$twocount = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$two."'"));
$threecount = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$three."'"));
$fourcount = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$four."'"));
$fivecount = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$five."'"));

$onecountu = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$one."' GROUP BY ip ;"));
$twocountu = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$two."' GROUP BY ip ;"));
$threecountu = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$three."' GROUP BY ip ;"));
$fourcountu = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$four."' GROUP BY ip ;"));
$fivecountu = mysqli_num_rows(mysqli_query($db, "SELECT * FROM Views WHERE Date like '".$five."' GROUP BY ip ;"));
 ?>
<center><h1>Views</h1></center>
<div id="views"></div>
<center><h1>Unieke Views</h1></center>
<div id="viewsu"></div>
<?php $data = Array('Monday'=>'Maandag','Tuesday'=>'Dinsdag','Wednesday'=>'Woensdag','Thursday'=>'Donderdag','Friday'=>'Vrijdag','Saturday'=>'Zaterdag','Sunday'=>'Zondag'); ?>
<script>
new Chartist.Line('#views', {
  labels: ['<?php echo $data[date('l',strtotime("-4 days"))];?>', '<?php echo $data[date('l',strtotime("-3 days"))];?>', '<?php echo $data[date('l',strtotime("-2 days"))];?>', '<?php echo $data[date('l',strtotime("-1 days"))];?>', '<?php echo $data[date('l')].' (Vandaag)';?>'],
  series: [
    [<?php echo $fivecount.','.$fourcount.','.$threecount.','.$twocount,','.$onecount;?>]
  ]
}, {
  fullWidth: false,
  chartPadding: {
    right: 40
  }
});
new Chartist.Line('#viewsu', {
  labels: ['<?php echo $data[date('l',strtotime("-4 days"))];?>', '<?php echo $data[date('l',strtotime("-3 days"))];?>', '<?php echo $data[date('l',strtotime("-2 days"))];?>', '<?php echo $data[date('l',strtotime("-1 days"))];?>', '<?php echo $data[date('l')].' (Vandaag)';?>'],
  series: [
    [<?php echo $fivecountu.','.$fourcountu.','.$threecountu.','.$twocountu,','.$onecountu;?>]
  ]
}, {
  fullWidth: false,
  chartPadding: {
    right: 40
  }
});
</script>
<script>
$(" #stats ").addClass('active');
</script>
</body>
</html>
