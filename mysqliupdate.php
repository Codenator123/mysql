<?php 
// mysql connect importeren 
include "connecti.php"; 

error_reporting(0); 

$id = $_GET['id']; 

$sql = "SELECT * FROM producten WHERE product_id =$id"; 

// variabele $mysqli is het object uit de connecti.php 
$result = $mysqli->query($sql); 

if ($result->num_rows > 0) { 
    // output data van elke kolom 
    while($row = $result->fetch_assoc())  
    { 
?>

<form method='post'><table width='400' border='0' cellspacing='1' cellpadding='2'> 
<tr><td width=100>product naam</td><td><input name='product_naam' type='text' id='product_naam' value='<?php echo $row['product_naam'] ?>'></td></tr> 
<tr><td width='100'>product aantal</td><td><input name='product_aantal' type='text' id='product_aantal' value='<?php echo $row['product_aantal']; ?>'></td> 
</tr><tr> 
<tr><td width='100'>product inkoop</td><td><input name='product_inkoop' type='text' value='<?php echo $row['product_inkoop']; ?>'></td> 
</tr></table> 
</br> 
<input type="submit" value="Updaten"></td> 
</form>

<?php

    } 
} else { 
    echo "0 resultaten"; 
} 

// update uitvoeren 
if (isset($_REQUEST['product_naam'])) 
 { 
// waarden ophalen 
$product_naam = $_POST['product_naam']; 
$product_aantal = $_POST['product_aantal']; 
$product_inkoop = $_POST['product_inkoop']; 

// query opstellen 
$sql2 = "UPDATE producten SET product_naam = '$product_naam', product_aantal = '$product_aantal', product_inkoop = '$product_inkoop' WHERE product_id = '$id'"; 

// query uitvoeren 
if (mysqli_query($mysqli, $sql2)) { 
    echo "Succesvol bijgewerkt"; 
    // terugsturen naar de hoofdpagina 
    header('Location: index.php'); 
} else { 
    echo "Error updating record: " . mysqli_error($mysqli); 
} 
 } 

// verbinding sluiten 
$mysqli->close(); 

?>