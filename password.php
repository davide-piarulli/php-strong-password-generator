<?php
session_start();
if (!isset($_SESSION['newpassword'])) {
  header('Location: .index.php');
} else {
  $mypw = $_SESSION['newpassword'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password</title>
</head>

<body>
  <?php echo $mypw ?>
</body>

</html>