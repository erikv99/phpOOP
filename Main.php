<?php  
// I believe my php.ini allready has this set (for development) but still.
// My php.ini also has this set up 'display_errors = on'
error_reporting(E_ALL);

require_once("Objects/Table.php");
require_once("Objects/Stool.php");
require_once("Objects/Chair.php");

// Creating a new stool, table and chair instance 
// Chair will raise a NegativeOrZeroNumberException
try 
{
	$myStool = new Stool(40, 50, "Purple");
	$myTable = new Table(90, 80, "Wood");
	$myChair = new Chair(0, -10, "Sofa"); 
}
catch (NegativeOrZeroNumberException $e) 
{
	echo $e->getUserFriendlyMessage();
}

// Getting and printing the const Manufacturer 
echo "Table Manufacturer: " . Table::MANUFACTURER . "<br/>";

// Getting and printing the width of the table before using the override function to change it (should be 90)
echo "Table width before overridden function usage is " . $myTable->getWidth() . "<br/>";

// Changing the width of the table using the overridden setWidth function (see class itself)
$myTable->setWidth(100);

// If argument has < 2 chars this will throw error (see Table::setMaterial())
try 
{
	$myTable->setMaterial("e");	
}
catch (exception $e) 
{
	echo $e->getMessage();	
}

$myTable->putObjectOnTable($myStool);


// TODO make a general exceptionchecker class, which throws exception under certain circumstances. for example class->checkNumOfArgException(int numOfArgs) this function then throws the exception
?>