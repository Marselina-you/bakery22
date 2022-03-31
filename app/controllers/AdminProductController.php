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
	
}