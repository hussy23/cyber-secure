<!-
Code Initiator - Hussain Moulana
Begin Date - March - 2023
>

<?php
class DBController {
	public $user = "b8f5fe66220704";
	public $password = "5b7f8b7c";
	public $database = "heroku_611d7b294f31a80";
	public $host = "us-cdbr-east-04.cleardb.com";
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