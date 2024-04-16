<?php
require_once __DIR__ . '/data/functions.php';
$password;
// $error = '';

if (!isset($_GET['pwlenght'])) {
  // if (!empty($_GET['pwlenght'])) $error = 'Errore';
} else {
  $password = generateRandomString($_GET['pwlenght']);
  // $error = "La Password e: " . $password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Password Generator</title>
</head>

<body>
  <div class="container">
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    <form action="index.php" method="GET">
      <label for="pwlenght">Lunghezza password:</label>
      <input type="number" name="pwlenght" id="pwlenght" placeholder="Scrivi un numero">
      <button class="btn btn-primary" type="submit">Richiedi password</button>
      <button class="btn btn-secondary ">Annulla richiesta</button>
    </form>
    <span class=" text-danger">
      <?php
      echo "La password è:" . $password ?>
    </span>

  </div>
</body>

</html>