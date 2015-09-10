<?php

// mysql connect importeren 
include "connecti.php"; 

// id ophalen 
$id = $_GET['id']; 

// sql delete een record op id 
$sql = "DELETE FROM producten WHERE product_id=$id"; 

if (mysqli_query($mysqli, $sql)) { 
    echo "Record succesvol verwijderd"; 
    // terugsturen naar de hoofdpagina 
    header('Location: index.php'); 
} else { 
    // fouten kan je hier aanzetten. 
    //echo "Error deleting record: " . mysqli_error($mysqli); 
} 

mysqli_close($mysqli); 

// bron weergeven 
show_source(__FILE__); 
?> 