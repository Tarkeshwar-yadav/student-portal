<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/login.css">
   <link rel="stylesheet" href="../css/header.css">
   <link rel="stylesheet" href="../css/footer.css">
</head>
<body>

<?php include_once '../layouts/header.php'; ?>

<div class="login-container">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h2>Submitted Data</h2>";
    echo "<table border='1' cellpadding='8'>
            <tr>
                <th>Name</th>
                <th>Roll</th>
                <th>Math</th>
                <th>Science</th>
                <th>English</th>
                <th>Computer</th>
                <th>Remarks</th>
            </tr>
            <tr>
                <td>{$_POST['name']}</td>
                <td>{$_POST['roll']}</td>
                <td>{$_POST['math']}</td>
                <td>{$_POST['science']}</td>
                <td>{$_POST['english']}</td>
                <td>{$_POST['computer']}</td>
                <td>{$_POST['remarks']}</td>
            </tr>
        </table>";
}
?>

   
</div>

<?php include_once '../layouts/footer.php'; ?>

</body>
</html>
