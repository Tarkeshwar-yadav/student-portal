<?php
session_start();

$default_username ="abc@gmail.com";
$default_password ="password";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['username'];
    $password = $_POST['password'];

    if($email == $default_username){
        if($password == $default_password)
        {
            $_SESSION['student_login']='login successful';
            header("Location: ../user/index.php");
        }
        else{
            echo "Wrong password";
        }
        
    }else{
        echo "<span style='color:red;'>wrong email</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  
</head>
<body>

<?php include '../layouts/header.php'; ?>

<div class="login-container">
    <h2>User Login</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

<?php include '../layouts/footer.php'; ?>

</body>
</html>
