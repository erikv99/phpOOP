<?php 
require_once("Exceptions/NegativeOrZeroNumberException.php");

/** Furniture base class */
class Furniture
{
	// Constant in class scope
	public const MANUFACTURER = "Furniture Kings Inc";
	
	// Private properties / vars
	private $width;
	private $height;
	

	protected function __construct(int $width, int $height)
	{
		// Using named arguments like this requires php v >= 8. So if it throws an error thats the problem.
		if ($width <= 0) { throw new NegativeOrZeroNumberException(umberIdentifier: "Width"); }
		if ($height <= 0) { throw new NegativeOrZeroNumberException(numBerIdentifier: "Height"); }
		$this->width = $width;
		$this->height = $height;
	}

	public function __destruct()
	{
		echo "Furniture exterminated<br>";
	}

	/**
	* Will get the width of the furniture
	* @return int $width
	*/
	public function getWidth()
	{
		return $this->width;
	}

	public function getHeight()
	{
		return $this->height;
	}

	/**
	* Will set the width of the furniture
	* @param int $width
	*/
	public function setWidth(int $width)
	{
		if (func_num_args() != 1) 
		{
			throw new Exception("<br> ERROR: function setWidth requires 1 parameter (int $width)! <br><br>");
		}
		$this->width = $width;
	}

	/**
	* Will set the height of the furniture
	* @param int $height
	*/
	public function setHeight(int $height)
	{
		$this->height = $height;
	}
}
?>