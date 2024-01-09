<?php

require_once '../components/connection.php';
session_start();

if(isset($_POST['submit'])){

   $username = $_POST['username'];
   $username = filter_var($username, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['password']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_admin = $con->prepare("SELECT * FROM admintable WHERE username = ? AND pass = ?");
   $select_admin->execute([$username, $pass]);
   $row = $select_admin->fetch(PDO::FETCH_ASSOC);

   if($select_admin->rowCount() > 0){
      $_SESSION['admin_id'] = $row['id'];
      header('location:dashboard.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="admin_login.php" method="POST" autocomplete="">
                    <h2 class="text-center">AmpingLab Admin</h2>
                    <p class="text-center">Login with your username and password.</p>
                    <div class="form-group">
                        <input class="form-control" type="name" name="username" placeholder="username" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="submit" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="register_admin.php" name="submit">Signup now</a></div>
                </form>
            </div> 
        </div>
    </div>
    
</body>
   
</html>