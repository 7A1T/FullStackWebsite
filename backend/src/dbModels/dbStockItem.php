<?php
namespace dbModels;
/**
 * database representation of a stock-item
 */
class dbStockItem
{ 
	private $id;
	private $name;
	
	public function getName()
	{
		return $this->name;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setName(string $newName)
	{
		$this->name = newName;
	}
	public function setId(string $newId)
	{
		$this->name = newId;
	}
}

?>