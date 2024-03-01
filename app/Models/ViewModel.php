<?php

namespace app\Models;

class ViewModel extends Model
{
	/**
	 * Method to extract data from the database.
	 */
	public function insertData(): array|string
	{
		//TODO img
		$conn = new Model();
		return $conn->dbConnect();
	}
}