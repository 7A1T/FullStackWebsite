<?php
namespace dbModels;

class dbShelf implements dbItemIterface
{
	private $id;
	private $stockItems = array(); // array of dbstockItem

	public function addItem(dbModels\dbStockItem $dbItem)
	{
		$this->stockItems[newStockItem->getId()] = dbItem;
	}
	public function getItem(string $stockItem)
	{
		# code...
	}
}

?>