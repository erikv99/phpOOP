<?php  
require_once("Exceptions/CustomException.php");

/** 
* Custom exception for when a number is <= 0
*/
class NegativeOrZeroNumberException extends CustomException 
{
	private $numberIdentifier;

	public function __construct($message = "", $code = 0, Throwable $previous = null, string $numberIdentifier = "Number") 
	{
		parent::__construct($message, $code, $previous);
		$this->numberIdentifier = $numberIdentifier;
	}

	/**
	* Since the getMessage function is not overridable we make the getUserFriendlyMessage function
	* @return A user friendly error message.
	*/
	public function getUserFriendlyMessage() : string
	{
		$returnMessage = "<br/><b>Exception occured in file " . $this->file . " on line number " . $this->line . "</b>: " . $this->numberIdentifier . " may not be less then or equal to zero!<br/><br/>";
		return $returnMessage;
	}
}
?>