<?php
class stockItemController
{
	private function connectDB()
	{ // TODO: add server details to environment or something
		try {
			$connection = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
			// set the PDO error mode to exception
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully";
		} catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
		return $connection;
	}

	private function disconnectDB(PDO $connection)
	{
		$connection = null;
	}

	public function fetchStockItem(string $id)
	{
		$connection = connectDB();
		$sql = ""; #TODO: make sql statement for fetching a stock item
		disconnectDB($connection);
	}

	public function insertStockItem(dbmodels\dbStockItem $newItem)
	{
		$connection = connectDB();
		$sql = ""; #TODO: make sql statement for fetching a inserting item
		disconnectDB($connection);
	}
}

?>