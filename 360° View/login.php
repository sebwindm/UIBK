<?php
session_start();
include_once './includes/database-handler.php';



  $pdo = new PDO("mysql:host=localhost;dbname=$dbName;charset=utf8", $dbUsername, $dbPassword);

// $pdo3 = new PDO('mysql:host=localhost;dbname=360', 'id7789168_dreilaenderbank', 'Turbobank123');

if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $statement = $pdo->prepare("SELECT * FROM useraccounts WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    //Überprüfung des Passworts
    if ($user !== false && password_verify($password, $user['password'])) {
        $_SESSION['userid'] = $user['email'];
        $_SESSION['useraccount_email'] = $user['email'];
        $_SESSION['user_firstname'] = $user['firstname'];
        $_SESSION['user_lastname'] = $user['lastname'];
        $_SESSION['powerbi'] = $user['PowerBILink'];
        header("location: index.php");
    } else {
        $errorMessage = "Invalid E-Mail or password<br>";
    }

}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Drei Länder Bank - Login</title>
  <!-- Latest compiled and minified Bootstrap CSS -->
  <?php
  include './includes/stylesheet-loader.php';
  ?>
    <!-- Custom styles for this template -->
    <link href="./CSS/signin.css" rel="stylesheet">
</head>
<body>

<!-- include the top navigation bar -->
    <?php include './includes/top-navigation.php';?>


<?php
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>



<div class="container">

      <form class="form-signin" action="?login=1" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus size="40" maxlength="250" name="email">

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required size="40"  maxlength="250" name="password">

        <!-- <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
       <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br><br><br><br><br>
        <div class="alert alert-primary" role="alert">
Supported browsers: Mozilla Firefox, Google Chrome, Microsoft Edge</div>
        <!--  <p>You don't have an account yet?</p>
        <a href="signup.php" class="btn btn-lg btn-primary btn-block">Sign up</a> -->
     </form>

    </div> <!-- /container -->



    <?php
    include './includes/scripts-loader.php';
    ?>
    <script type="text/javascript">
    $(document).ready(function () {
      $(".nav li").removeClass("active");//this will remove the active class from
                                         //previously active menu item
      $('#login').addClass('active');
    });</script>
  </body>
</html>
