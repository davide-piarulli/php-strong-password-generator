<?php
function generateRandomString($length = 5)
{
  // credo 3 variabili per lettere, numeri e simboli
  $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numbers = '0123456789';
  $simboli = '!?&%$<>^+-*/()[]{}@#_=';
  // concateno le 3 stringhe in 1 sola
  $characters = $letters . $numbers . $simboli;
  // recupero la lunghezza richiesta inserita nell'input
  $length = $_GET['pwlenght'];
  $randomPassword = substr(str_shuffle($characters), 0, $length);

  return $randomPassword;
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
    <?php $randomPassword = generateRandomString();
    echo "La Password e: " . $randomPassword; ?>
  </div>
</body>

</html>