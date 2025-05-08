<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">


   
   
</head>
<body>

<?php include_once '../layouts/header.php'; ?>


   

   
<div class="form-container">
  <h3>Marksheet Entry Form</h3>
  <form action="../student/index.php" method="POST" enctype="multipart/form-data">
    <div class="form-grid">
      <label for="name">Student Name:</label>
      <input type="text" name="name" required>

      <label for="roll">Roll Number:</label>
      <input type="text" name="roll" required>

      <label for="math">Math:</label>
      <input type="number" name="math" required>

      <label for="science">Science:</label>
      <input type="number" name="science" required>

      <label for="english">English:</label>
      <input type="number" name="english" required>

      <label for="computer">Computer:</label>
      <input type="number" name="computer" required>

      <label for="remarks">Remarks:</label>
      <textarea name="remarks" rows="2"></textarea>
    </div>

    <button type="submit" name="submit" class="submit-btn">Submit</button>
  </form>
</div>

<?php include_once '../layouts/footer.php'; ?>

</body>
</html>
