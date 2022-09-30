<?php 
class CartController
{
	public function actionAdd($id)
	{
		Cart::addProduct($id);

		$referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
	}
     public function actionDelete($id)
    {
        // Удалить товар из корзины
         Cart::deleteProduct($id);
        // Возвращаем пользователя на страницу
        header("Location: /cart/");
    }
	
	  public function actionAddAjax($id)
    {
        // Добавляем товар в корзину
        echo Cart::addProduct($id);
        return true;
    }
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);
$productsBest = Product::getProductsBest();
        $productsInCart = false;

        // Получим данные из корзины
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds);


            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
            $totalQuantity = Cart::countItems();
        }

        require_once(ROOT . '/views/cart/index.php');

        return true;
    }
        public function actionCheckout()
    {

        // Список категорий для левого меню
        $categories = array();
        $categories = Category::getCategoriesList();
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);

        // Статус успешного оформления заказа
        $result = false;


        // Форма отправлена?
        if (isset($_POST['submit'])) {
            // Форма отправлена? - Да
            // Считываем данные формы
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            // Валидация полей
            $errors = false;
            if (!User::checkName($userName))
                $errors[] = 'Неправильное имя';
            if (!User::checkPhone($userPhone))
                $errors[] = 'Неправильный телефон';

            // Форма заполнена корректно?
            if ($errors == false) {
                // Форма заполнена корректно? - Да
                // Сохраняем заказ в базе данных
                // Собираем информацию о заказе
                $productsInCart = Cart::getProducts();
               
                    $userId = User::checkLogged();
                     // Сохраняем заказ в БД
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);


                

               

                if ($result) {
                    // Оповещаем администратора о новом заказе                
                    //$adminEmail = 'php.start@mail.ru';
                    //$message = 'http://digital-mafia.net/admin/orders';
                    //$subject = 'Новый заказ!';
                    //mail($adminEmail, $subject, $message);

                    // Очищаем корзину
                    Cart::clear();
                    
         header("Location: /cart/result");
         exit;

                    
                }
            } else {
                // Форма заполнена корректно? - Нет
                // Итоги: общая стоимость, количество товаров
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);

                $products = Product::getProdustsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();

            }
        } else {
            // Форма отправлена? - Нет
            // Получием данные из корзины      
            $productsInCart = Cart::getProducts();

            // В корзине есть товары?
            if ($productsInCart == false) {
                // В корзине есть товары? - Нет
                // Отправляем пользователя на главную искать товары
                header("Location: /");
            } else {
                // В корзине есть товары? - Да
                // Итоги: общая стоимость, количество товаров
                $productsIds = array_keys($productsInCart);
                $products = Product::getProdustsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();


                $userName = false;
                $userPhone = false;
                $userComment = false;

                // Пользователь авторизирован?
                if (User::isGuest()) {
                    // Нет
                   
                    header("Location: /user/loginForOrder");
                    //отправляем его регистрироваться или авторизироваться
                    // Значения для формы пустые
                } else {
                    // Да, авторизирован                    
                    // Получаем информацию о пользователе из БД по id
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    // Подставляем в форму
                    $userName = $user['name'];
                    $userPhone = $user['phone'];
                }
            }
        }
         //print_r($products);
         //echo '</br>';
        //print_r($productsIds);

 
        require_once(ROOT . '/views/cart/checkout.php');

        return true;
    }
    
    

     public function actionResult()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);

        // Получим данные из корзины
        $ordersList = Order::getOrderByIduserMy($userId);

     
                   // $result2 = Order::getOrderByIduserMy($userId);
                   //$order = Order::getOrderById($id);
                    

 echo '</br>';
 print_r($ordersList);
 echo '</br>';
   foreach ($ordersList as $order): 
    $id = $order['id'];
    $products = $order['products'];
   
     endforeach; 
      echo '</br>';
echo 'id заказа';
  echo $id; 
   echo '</br>';
 print_r($products);
 //echo '</br>';
 // Получаем данные о конкретном заказе
$order = Order::getOrderById($id);
print_r($order);
 echo '</br>';
        // Получаем массив с идентификаторами и количеством товаров
$productsQuantity = json_decode($order['products'], true);
print_r($productsQuantity);
//echo '</br>';
        // Получаем массив с индентификаторами товаров
       $productsIds = array_keys($productsQuantity);
        print_r($productsIds);
        echo '</br>';

        // Получаем список товаров в заказе
        $products = Product::getProdustsByIds($productsIds);
        print_r($products);

                       


        require_once(ROOT . '/views/cart/result.php');

        return true;
    }
}