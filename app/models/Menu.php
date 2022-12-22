<?php
class Menu
{
	
    public static function getItemsList()
	{$db = Db::getConnection();

        $itemsList = array();

        $result = $db->query('SELECT id, item FROM menuadmin');

        $i = 0;
        while ($row = $result->fetch()) {
            $itemsList[$i]['id'] = $row['id'];
            $itemsList[$i]['item'] = $row['item'];
            $i++;
        }

        return $itemsList;
	}
    

}