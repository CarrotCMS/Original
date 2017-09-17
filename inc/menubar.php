<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo sitetitle; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
      <li class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Stijl
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
