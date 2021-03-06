<?php 
class AdminProductController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
		$productsList = Product::getProductsList();

		require_once(ROOT . '/views/admin_product/index.php');
		return true;
	}
	public function actionDelete($id)
	{
		self::checkAdmin();

		if (isset($_POST['submit'])) {
			Product::deleteProductById($id);
			header("Location: /admin/product");
		}
		require_once(ROOT . '/views/admin_product/delete.php');
		return true;
	}
	public function actionCreate()
	{
		self::checkAdmin();
		$categoriesList = Category::getCategoriesListAdmin();

		if (isset($_POST['submit'])) {
			$options['category_id'] = $_POST['category_id'];
			$options['name'] = $_POST['name'];
			$options['price'] = $_POST['price'];
			$options['weight'] = $_POST['weight'];
			$options['description'] = $_POST['description'];
			$options['ing1'] = $_POST['ing1'];
			$options['ing2'] = $_POST['ing2'];
			$options['ing3'] = $_POST['ing3'];
			$options['slogan'] = $_POST['slogan'];
			$options['top1'] = $_POST['top1'];
			$options['top2'] = $_POST['top2'];
			$options['top3'] = $_POST['top3'];

			$errors = false;

			if (!isset($options['name']) || empty($options['name'])) {
				$errors[] = 'заполните поле, собака';
			 }
			if ($errors == false) {
				$id = Product::createProduct($options);
				if ($id) {
					if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
						move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
					}
				};
				header("Location: /admin/product");
			}
			
		}
		require_once(ROOT . '/views/admin_product/create.php');
		return true;




			}
	public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список категорий для выпадающего списка
        $categoriesList = Category::getCategoriesListAdmin();

        // Получаем данные о конкретном заказе
        $product = Product::getProductById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            
            $options['category_id'] = $_POST['category_id'];
            $options['name'] = $_POST['name'];
            $options['price'] = $_POST['price'];
            $options['weight'] = $_POST['weight'];
            $options['description'] = $_POST['description'];
            $options['ing1'] = $_POST['ing1'];
            $options['ing2'] = $_POST['ing2'];
            $options['ing3'] = $_POST['ing2'];
            $options['slogan'] = $_POST['slogan'];
            $options['top1'] = $_POST['top1'];
            $options['top2'] = $_POST['top2'];
            $options['top3'] = $_POST['top3'];
            

            // Сохраняем изменения
            if (Product::updateProductById($id, $options)) {


                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                 // Если загружалось, переместим его в нужную папке, дадим новое имя
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                }
                
            }

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/product");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_product/update.php');
        return true;
    }
	
}