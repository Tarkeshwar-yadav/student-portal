<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/landing-page.css">
</head>
<body>

<?php include_once 'layouts/header.php'; ?>

<div class="login-container">
    <h2>Select Login Type</h2>
   
        <button   class="admin-btn"><a href="login/admin.php">Admin Login</a></button>
        <button   class="admin-btn"><a href="login/student.php">Student Login</a></button>
        <button   class="admin-btn"><a href="login/user.php">Login Here</a></button>

   
</div>

<?php include_once 'layouts/footer.php'; ?>

</body>
</html>
