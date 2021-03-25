<?php
/**
* Extending the standard exception class for loggin purposes
*/
class CustomException extends Exception 
{
	public function __construct($message, $code = 3, Throwable $previous = null) 
	{
		parent::__construct($message, $code, $previous);
		$ipAdress = $this->getIpAdress();
		$userAgent = $_SERVER["HTTP_USER_AGENT"];
		$date = new DateTime();
		$dateTimeStamp = $date->getTimeStamp();
		$filePath = "Logs/Errors.log";

		// Checking if the log file exists otherwise creating one.
		if (!file_exists($filePath)) 
		{
			// Creating a file using fopen then closing it. 
			$file = fopen("Logs/Errors.log", "a");
			$file->close();
		}

		// Had a few tries with my phones, manually redacted a part of the ip for privacy (look in log file)
		error_log($ipAdress . " " . $userAgent . " " . $dateTimeStamp . " Error in " . $this->file . " on line " . $this->line . "\n", 3, $filePath);
	}

	private function getIpAdress()
	{
    	
		// This code makes sure we actually get the ip adress, even when the user is using a proxy for example
   		if(!empty($_SERVER['HTTP_CLIENT_IP']))
    	{
        	$ip = $_SERVER['HTTP_CLIENT_IP'];
    	}
    	elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    	{	
        	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    	}
    	else
    	{
        	$ip = $_SERVER['REMOTE_ADDR'];
    	}

    	// ::1 is a alias for Localhost
    	if ($ip == "::1") 
    	{
    		$ip = "127.0.0.1 (localhost)";
    	}

    return $ip;
	}
}
?>