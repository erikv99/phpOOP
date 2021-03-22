<?php 
include_once("Super/Furniture.php");

/** Table class (inherits from Furniture) */
class Table extends Furniture
{
	private $material = "";

	public function __construct(int $width, int $height, string $material)
	{
		parent::__construct($width, $height);
		$this->material = $material;
	}
	
	/** 
	* Will set the material.
	* @param string $material 
	*/
	public function setMaterial(string $material)
	{	
		// Throwing an exception if the lenght of the material string name is less then 1 
		if (strlen($material) <= 1) 
		{
			throw new Exception("<br> ERROR: Material must atleast contain 2 characters <br><br>");
		} 

		printf("Setting material to %s <br>", $material); 
		$this->material = $material;
	}
	
	/** 
	* Will get the material.
	* @return string $material 
	*/
	public function getMaterial()
	{
		return $this->material;
	}

	/** 
	* Overriden setWidth function 
	* @param int $width
	*/
	public function setWidth(int $width) 
	{
		// Usually code would be placed before the call to the original function, but in this case it wouldn't make any sense would it.
		parent::setWidth($width);;
		echo "Current width after overriden function is " . $this->getWidth() . " <br>";
	}

	/**
	* Will put an object (stool or chair) on the table
	* @param Object $object of type Stool or Chair
	*/
	public function putObjectOnTable(Object $object) 
	{
		if ($object instanceof Stool or $object instanceof Chair) 
		{
			printf("Object %s has been placed on the table<br>", strval(get_class($object)));
		}
	}
}
?>

