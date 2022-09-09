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

      

        $result = $db->query('SELECT id, name, sort_order, status, style, style2 FROM category '
                . 'ORDER BY sort_order ASC');
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $categoryList[$i]['style'] = $row['style'];
            $categoryList[$i]['style2'] = $row['style2'];
            $i++;
        }
        return $categoryList;

    }
    public static function deleteCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM category WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    public static function updateCategoryById($id, $name, $sort_order, $status, $style, $style2)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE category
            SET 
                name = :name, 
                sort_order = :sort_order,
                status = :status,
                
                style = :style,
                style2 = :style2

              
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sort_order, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        
        $result->bindParam(':style', $style, PDO::PARAM_STR);
        $result->bindParam(':style2', $style2, PDO::PARAM_STR);
        
        
        return $result->execute();
    }
    public static function getCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM category WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }
     public static function createCategory($name)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO category (name) '
                . 'VALUES (:name)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
       
        return $result->execute();
    }

}