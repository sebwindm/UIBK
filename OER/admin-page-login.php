<?php
// HOWTO:
// Add the table useraccounts to the database by using the SQL queries provided in the file matrixowo new.sql
// You can either add your own account data or use the example provided
// The credentials for the example account are:
// username: oer-admin
// password: test
// Once you fill the login form with these credentials, you get refered to the admin page where you can reset the data from the selection methods applications
// e.g. you can reset the now wow how matrix, so that all votes are reset
session_start();

$localTestingModeOn = 0;

if ($localTestingModeOn == 1){
	// db local
$pdo = new PDO('mysql:host=localhost;dbname=matrixowo;charset=utf8', 'root', '');
} else {
	// db server
$pdo = new PDO('mysql:host=localhost;dbname=dc;charset=utf8', 'dc', 'Dc@2018');

}

if(isset($_GET['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $statement = $pdo->prepare("SELECT * FROM useraccounts WHERE username = :username");
    $result = $statement->execute(array('username' => $username));
    $user = $statement->fetch();

    //Überprüfung des Passworts
    if ($user !== false && password_verify($password, $user['password'])) {

        $_SESSION['userid'] = $user['username'];

        header("location: admin-page.php");
    } else {
        $errorMessage = "Invalid username or password<br>";
    }

}

?>



<!DOCTYPE html5>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>OER - UIBK</title>
			<link rel='stylesheet' href='style.css' />
			<link rel="shortcut icon" href="images/icon.ico"/>
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <?php include_once "./includes/stylesheet-loader.php";
      			include_once "./includes/top-navigation-bar.php";
      ?>
			</head>
	<body>


<!--content bar with both left menu and content divs-->
		<section>


			<?php
			if(isset($errorMessage)) {
			    echo $errorMessage;
			}
			?>


      <div class="">
        <form class="" action="?login=1" method="post">
              <label for="inputusername" class="">Username</label>
              <input type="text" id="inputusername" class="" placeholder="Username" required autofocus size="40" maxlength="250" name="username">

              <label for="inputPassword" class="">Password</label>
              <input type="password" id="inputPassword" class="" placeholder="Password" required size="40"  maxlength="250" name="password">

              <!-- <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div> -->
             <button class="btn btn-lg btn-primary btn-blockn" type="submit">Sign in</button>
              <br><br><br><br><br>
              <!--  <p>You don't have an account yet?</p>
              <a href="signup.php" class="btn btn-lg btn-primary btn-block">Sign up</a> -->
           </form>

          </div> <!-- /container -->



          <?php include_once "./includes/javascript-loader.php" ?>

	</body>
</html>
