<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo $maindir; ?>carrot-admin"><strong><?php echo sitetitle; ?></strong> Back End</a>
    </div>
    <ul class="nav navbar-nav">
      <li id="dashboard"><a href="<?php echo $maindir; ?>carrot-admin/"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Dashboard</a></li>
      <li id="profile"><a href="<?php echo $maindir; ?>carrot-admin/profile.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profiel</a></li>
      <li id="stats"><a href="<?php echo $maindir; ?>carrot-admin/stats.php"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Statistieken</a></li>
      <li id="frontend"><a href="<?php echo $maindir; ?>"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;Front-End</a></li>
    </ul>

        <?php include($maindir.'inc/styles.php'); ?>

  </div>
</nav>
