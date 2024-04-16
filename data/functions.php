<?php

function generateRandomString($n)
{
  // creo 3 variabili per lettere, numeri e simboli
  $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numbers = '0123456789';
  $simboli = '!?&%$<>^+-*/()[]{}@#_=';
  // concateno le 3 stringhe in 1 sola
  $characters = $letters . $numbers . $simboli;

  // inizializzo la pw vuota
  $randomPassword = '';
  for ($i = 0; $i < $n; $i++) {
    $indice = rand(0, strlen($characters) - 1);
    $randomPassword .= $characters[$indice];
  }

  return $randomPassword;
}
