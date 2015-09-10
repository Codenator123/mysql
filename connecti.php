<?php 
// Voorbeeld connecti.php eigen databasegegevens invullen en commentaarregels weghalen /* */ 

// nieuw object mysqli aanmaken voor de database gegevens 

$mysqli = new mysqli("localhost", "root", "", "tools"); 
  
if (mysqli_connect_errno()) { 
    printf("Connect failed: %s\n", mysqli_connect_error()); 
    exit(); 
}
