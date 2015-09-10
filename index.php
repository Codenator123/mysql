<?php 
// mysql connect importeren 
include "connecti.php"; 

$sql = "SELECT * FROM producten /*where product_filiaal = 2*/"; 

// variabele $mysqli is het object uit de connecti.php 
$result = $mysqli->query($sql); 

if ($result->num_rows > 0) { 
    // output data van elke kolom 
    while($row = $result->fetch_assoc())  
    { 
    /* 
        echo "id: " . $row["id"].  
        " - Naam: " . $row["voornaam"]. 
        " " . $row["achternaam"]. "<br>"; 
        */ 
         
         
    $id = $row['product_id']; 
   echo $row['product_naam'] . " " . $row['product_aantal'] ." ". $row['product_inkoop']." prijs - "; 
   echo "<a href=mysqlidelete.php?id=$id>VERWIJDEREN </a><a href=mysqliupdate.php?id=$id> - UPDATE</a>"; 
   echo "<br />"; 
    
    
    
    } 
} else { 
    echo "0 resultaten"; 
} 

?> 
<br>
<br>
<?php
 
 include "connecti.php"; 

 	$sql = "SELECT sum(product_inkoop) AS Totaal FROM producten WHERE product_filiaal = 1";

	// variabele $mysqli is het object uit de connecti.php 
	$result = $mysqli->query($sql); 

	if ($result->num_rows > 0) { 
	    // output data van elke kolom 
	    while($row = $result->fetch_assoc())  
	    { 
	         
	   echo "Totaal inkoop Rotterdam";
	   ?>
	   <br>
	   <br>
	   <?php
	   echo $row['Totaal'] ;
	    } 
	} else { 
	    echo "0 resultaten"; 
	} 

?>
<br>
<br>
<?php
 
 include "connecti.php"; 

 	$sql = "SELECT sum(product_inkoop * product_aantal) AS GrandTotaal FROM producten WHERE product_filiaal = 1";

	// variabele $mysqli is het object uit de connecti.php 
	$result = $mysqli->query($sql); 

	if ($result->num_rows > 0) { 
	    // output data van elke kolom 
	    while($row = $result->fetch_assoc())  
	    { 
	         
	   echo " Voorraad Totaal inkoop Rotterdam";
	   ?>
	   <br>
	   <br>
	   <?php
	   echo $row['GrandTotaal'] ;
	    } 
	} else { 
	    echo "0 resultaten"; 
	} 

?>
<br>
<br>
<?php
 
 include "connecti.php"; 

 	$sql = "SELECT sum(product_inkoop * product_aantal) AS GrandTotaalAlmere FROM producten WHERE product_filiaal = 1";

	// variabele $mysqli is het object uit de connecti.php 
	$result = $mysqli->query($sql); 

	if ($result->num_rows > 0) { 
	    // output data van elke kolom 
	    while($row = $result->fetch_assoc())  
	    { 
	         
	   echo " Voorraad Totaal inkoop Almere";
	   ?>
	   <br>
	   <br>
	   <?php
	   echo $row['GrandTotaalAlmere'] ;
	    } 
	} else { 
	    echo "0 resultaten"; 
	} 

?>
<br>
<br>
<?php
 
 include "connecti.php"; 

 	$sql = "SELECT sum(product_inkoop * product_aantal) AS GrandTotaalTools FROM producten";

	// variabele $mysqli is het object uit de connecti.php 
	$result = $mysqli->query($sql); 

	if ($result->num_rows > 0) { 
	    // output data van elke kolom 
	    while($row = $result->fetch_assoc())  
	    { 
	         
	   echo " Voorraad Totaal inkoop ToolsForEver";
	   ?>
	   <br>
	   <br>
	   <?php
	   echo $row['GrandTotaalTools'] ;
	    } 
	} else { 
	    echo "0 resultaten"; 
	} 

?>