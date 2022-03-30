<?php 
class AdminProductController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
		$productsList = Product::getProductsList();

		require_once(ROOT . '/views/admin/admin_product/index.php');
		return true;
	}
	public function actionDelete($id)
	{
		self::checkAdmin();

		if (isset($_POST['submit'])) {
			Product::deleteProductById($id);
			header("Location: /admin/product");
		}
		require_once(ROOT . '/views/admin/admin_product/delete.php');
		return true;
	}
	public function actionCreate()
	{
		self::checkAdmin();
		$categoriesList = Category::getCategoriesListAdmin();

		if (isset($_POST['submit'])) {
			$options['name'] = $_POST['name'];
			$options['price'] = $_POST['price'];

			$errors = false;

			if (isset($options['name']) || empty($options[''])) {
				$errors[] = 'заполните поле';
			}
			if ($errors == false) {
				$id = Product::createProduct($options);
				if ($id) {
					if (is_uploaded_file($_FILES['image']['tmp_name'])) {
						move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/");
					}
				}
			}
			
		}




			}
	
}