<?php 
include_once("Super/Furniture.php");
/** Stool class (inherits from Furniture) */
class Stool extends Furniture
{
	private $color = "";

	public function __construct(string $width, string $height, string $color)
	{
		parent::__construct($width, $height);
		$this->color = $color;
	}

	/** 
	* Will set the color.
	* @param string $color 
	*/
	public function setColor(string $color) 
	{	
		$this->color = $color;
	}

	/** 
	* Will get the color.
	* @return string $color 
	*/
	public function getColor()
	{
		return $this->color;
	}
}
?>