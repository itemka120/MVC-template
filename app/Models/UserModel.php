<?php

namespace app\Models;

class UserModel extends Model
{
	public function UserRegister(array $userData)
	{
		//TODO Interfaces
		$conn = new Model();
		return $conn->dbConnect();
	}
}