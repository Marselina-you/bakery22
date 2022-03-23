<?php


class News
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getNewsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
/*			$host = 'localhost';
			$dbname = 'php_base';
			$user = 'root';
			$password = '';
			$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM assortiment WHERE id=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getNewsList() {
/*		$host = 'localhost';
		$dbname = 'php_base';
		$user = 'root';
		$password = '';
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/

		$db = Db::getConnection();
		$newsList = array();

		$result = $db->query('SELECT id, name, image, description, price, weight, top1, top2, top3, slogan, ing1, ing2, ing3 FROM assortiment ORDER BY id ASC LIMIT 10');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['name'] = $row['name'];
			$newsList[$i]['image'] = $row['image'];
			$newsList[$i]['description'] = $row['description'];
			$newsList[$i]['price'] = $row['price'];
			$newsList[$i]['weight'] = $row['weight'];
			$newsList[$i]['top1'] = $row['top1'];
			$newsList[$i]['top2'] = $row['top2'];
			$newsList[$i]['top3'] = $row['top3'];
			$newsList[$i]['slogan'] = $row['slogan'];
			$newsList[$i]['ing1'] = $row['ing1'];
			$newsList[$i]['ing2'] = $row['ing2'];
			$newsList[$i]['ing3'] = $row['ing3'];
			$i++;
		}

		return $newsList;
	
}

}