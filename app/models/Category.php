<?php
class Category
{
	public static function getCategoriesList()
	{
		$db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT id, name, style, style2 FROM category '
                . 'ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['style'] = $row['style'];
            $categoryList[$i]['style2'] = $row['style2'];
            $i++;
        }

        return $categoryList;
	}
    public static function getCategoriesListAdmin()
    {
        $db = Db::getConnection();

      

        $result = $db->query('SELECT id, name FROM category '
                . 'ORDER BY sort_order ASC');
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;

    }
}