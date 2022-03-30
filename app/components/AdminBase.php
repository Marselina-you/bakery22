<?php 
abstract class AdminBase
{
	public static function checkAdmin()
	{
		$userId = User::checkLogged();
		$user = User::getUserById($userId);

		if ($user['role'] == 'Admin') {
			return true;
		}
		die ('Access defined');
	}
}
 
