<?php  
/** 
* Custom exception for when a number is <= 0
*/
class NegativeOrZeroNumberException extends Exception 
{
	private $numberIdentifier;

	public function __construct($message = "", $code = 0, Throwable $previous = null, string $numberIdentifier = "Number") 
	{
		$this->numberIdentifier = $numberIdentifier;
		parent::__construct($message, $code, $previous);
	}

	/**
	* Since the getMessage function is not overridable we make the getUserFriendlyMessage function
	* @return A user friendly error message.
	*/
	public function getUserFriendlyMessage() : string
	{
		$returnMessage = "<br/>Exception occured in file: " . $this->file . " on line number " . $this->line . "<br/>" . $this->numberIdentifier . " may not be less then or equal to zero!<br/><br/>";
		return $returnMessage;
	}
}
?>