<?php 
session_start();
$message = '';
require 'database.php';
if( isset($_SESSION['user_id']) ){
  header("Location: /");
}
if(!empty($_POST['email']) && !empty($_POST['password'])):
//enter new user in the database
$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

if($stmt->execute() ):
   $message = 'Successfully created new user';
else:
  $message = 'Sorry there seems to be an error creating your account';
endif;
endif;
?>
<!DOCKTYPE html>
<html>
<head>
 <title>Register Below </title>
<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
<div class="header">
<a href="/">Home</a>
</div>
<?php if(!empty($message)): ?>
<p><?= $message ?></p>
<?php endif; ?>
 <h1>Register</h1>
  <span>or <a href="login.php">Login Here</a></span>
<form action="register.php" method="POST">
<input type="text" placeholder="Enter username" name="username">
<input type="text" placeholder="Enter your email" name="email">
<input type="password" placeholder="and password" name="password">
<input type="password" placeholder="confirm password" name="confirm_password">
<input type="text" placeholder="Enter display name" name="displayName">
  <textarea type="text" placeholder="Bio information" name="bio" class="bio" rows="10" cols="30"></textarea>
<input type="submit">
</form>
 </body>
 </html>