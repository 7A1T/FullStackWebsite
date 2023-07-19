<?php
namespace dbModels;
/**
 * A command pattern interface for adding and removing items from objects
 */
interface dbItemInterface { 
	public function getItem(string $dbId);
	public function addItem($dbItem);
}
?>