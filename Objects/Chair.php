<?php  
require_once("Super/Furniture.php");
/** Chair class (inherits from Furniture) */
class Chair extends Furniture
{
	private $chairType = "";

	public function __construct(int $width, int $height, string $chairType)
	{
		parent::__construct($width, $height);
		$this->chairType = $chairType;
	}

	public function setChairType(string $chairType)
	{
		$this->$chairType = $chair;
	}

	public function getChairType()
	{
		return $this->chairType;
	}
}
?>