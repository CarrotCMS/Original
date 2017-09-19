<?php
$maindir = '../';
include($maindir.'config.php');
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true'){
  header('Location: ./admin.php');
}
if(isset($_POST['user']) && isset($_POST['pass'])){
  $user = strtolower($_POST['user']);
  $pass = sha1($_POST['pass']);
  $result = mysqli_query($db, "SELECT * FROM users WHERE username LIKE '".$user."' AND password LIKE '".$pass."' LIMIT 1");
  if(mysqli_num_rows($result) < 1){
    $msg = 'Dit wachtwoord is fout.';
  }else{
    $_SESSION['logged_in'] = 'true';
    $_SESSION['username'] = mysqli_fetch_array($result)['username'];
    header('Location: ./admin.php');
  }
}
?>
<!DOCTYPE html>
<html>
<title>Back End | <?php echo sitetitle; ?></title>
<?php include($maindir.'inc/heads.php'); ?>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
}

.login-help{
  font-size: 12px;
}
</style>
<body>

<?php include($maindir.'inc/menubar.php');
if(isset($msg)){
  echo '<div class="alert alert-danger" style="margin-left: 30%; margin-right: 30%;">
<center> <strong>'.$msg.'</strong> </center>
</div>';
}
?>
<div>
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Log in</h1><br>
				  <form method="post">
					<input type="text" name="user" placeholder="Gebruikersnaam">
					<input type="password" name="pass" placeholder="Wachtwoord">
					<button type="submit" name="login" class="login loginmodal-submit" style="width: 100%;"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Log In</button>
        </form>
				  <div class="login-help">
					<a href="https://github.com/CarrotCMS/Original/wiki/Ik-ben-mijn-wachtwoord-vergeten">Hulp Nodig?</a><br>Standaardgegevens:<br><i class="fa fa-users" aria-hidden="true"></i>&nbsp;admin<br><i class="fa fa-key" aria-hidden="true"></i>&nbsp;default
				  </div>
				</div>
			</div>
</div>
<?php include($maindir.'inc/footer.php'); ?>

</body>
</html>
