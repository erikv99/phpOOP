<<?php 
/** Furniture base class */
class Furniture
{
	// Constant in class scope
	protected const MANUFACTURER = "Furniture Kings Inc";
	
	// Private properties / vars
	private $width;
	private $height;
	

	protected function __construct(int $width, int $height)
	{
		$this->material = $material;
		$this->color = $color;
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

	/** 
	* Will return the constant MANUFACTURER
	* @return const string MANUFACTURER
	*/
	public function getManufacturer()
	{
		return MANUFACTURER;
	}
}
?>