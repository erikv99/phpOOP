<<?php  
require_once("Objects/Table.php");
require_once("Objects/Stool.php");
require_once("Objects/Chair.php");

// Creating a new stool and table instance
$myStool = new Stool(40, 50, "Purple");
$myTable = new Table(90, 80, "Wood");

// Getting and printing the const Manufacturer using the getter
echo "<br> Manufacturer: " . $myTable->getManufacturer() . "<br><br>";

// Getting and printing the width of the table before using the override function to change it (should be 90)
echo "Table width before overridden function usage is " . $myTable->getWidth(); . "<br><br>"

// Changing the width of the table using the overridden setWidth function (see class itself)
$myTable->setWidth(100);


try 
{
	$myTable->setMaterial("Plastic");	
} 
catch (Exception $e) 
{
	echo $e->getMessage();	
}

try 
{
	$myTable->setMaterial("e");	

} 
catch (Exception $e) 
{
	echo $e->getMessage();	
}

try
{
	$myTable->setColor("blue", "yellow", "purple");
}
catch (Exception $e)
{
	echo $e->getMessage();
}

$myTable->putObjectOnTable($myStool);
?>