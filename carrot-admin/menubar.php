<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo $maindir; ?>carrot-admin"><strong><?php echo sitetitle; ?></strong> Back End</a>
    </div>
    <ul class="nav navbar-nav">

      <li id="dashboard"><a href="<?php echo $maindir; ?>carrot-admin/"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Dashboard</a></li>
      <li id="users"><a href="<?php echo $maindir; ?>carrot-admin/users.php"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Gebruikers</a></li>
      <li id="stats"><a href="<?php echo $maindir; ?>carrot-admin/stats.php"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Statistieken</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i>&nbsp;Stijl
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo $maindir.'switchstyle.php?s=default';?>">Standaard</a></li>
          <li><a href="<?php echo $maindir.'switchstyle.php?s=darkly';?>">Darkly</a></li>
          <li><a href="<?php echo $maindir.'switchstyle.php?s=yeti';?>">Yeti</a></li>
        </ul>
      </li>
      
    </ul>
  </div>
</nav>
