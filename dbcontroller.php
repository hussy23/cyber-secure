<!-
Code Initiator - Hussain Moulana
Begin Date - June - 2023
>

<?php
class DBController {
	public $user = "b5b92cc92c7696";
	public $password = "84e9850f";
	public $database = "heroku_8198dac0f287250";
	public $host = "us-cdbr-east-06.cleardb.net";
	public $connection;
	
	function __construct() {
		$this->connection = $this->connectDB();
	}
	
	function connectDB() {
		$connection = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $connection;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->connection,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if (!empty($resultset)) {
            return $resultset;
        }
    }
	
	function numRows($query) {
		$result  = mysqli_query($this->connection,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>