<?php  
/** 
* Defining the custom exception class
*/
class CustomException extends Exception 
{
	public function __construct($message, $code = 0, Throwable $previous = null) 
	{
		parent::__construct($message, $code, $previous);
	}

	public function __destruct() 
	{
		// NOTE make call to log exception function here
	}

	/**
	* Since the getMessage function is not overridable we make the getUserFriendlyMessage function
	* @return A user friendly error message.
	*/
	private function getUserFriendlyMessage()
	{
		return "Exception occured on line:<br/>" . $this->line . "<br/>";
	}
}
?>