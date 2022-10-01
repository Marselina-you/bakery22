<?php
class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $role = '';
        $phone = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $phone = $_POST['phone'];
          

            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
           
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            if ($errors == false) {
                $result = User::register($name, $email, $password, $role, $phone);
            }
            
        }   
        require_once(ROOT . '/views/user/register.php');
        return true;
    }
   // public function actionResult()
   // {
        //require_once(ROOT . '/views/user/result.php');
    //}
    public function actionLogin()
    {
        $name = '';
        $email = '';
        $password = '';
        $phone = '';
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /cabinet/"); 
            }

        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }
    public function actionLoginForOrder()
    {
        $name = '';
        $email = '';
        $password = '';
        $phone = '';
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /cart/checkout"); 
            }

        }

        require_once(ROOT . '/views/user/loginForOrder.php');

        return true;
    }
    public function actionLogout()
    {
        
        unset($_SESSION["user"]);
        header("Location: /");
    }
    public function actionOrder()
    {
        
        $userId = User::checkLoggedSite();
        $user = User::getUserById($userId);
        $ordersList = Order::getOrderByIduserAll($userId);
        $ordersListOld = Order::getOrderByIduserOld($userId);

 foreach ($ordersList as $order): 
     $productsQuantity = json_decode($order['products'], true);
     $productsIds = array_keys($productsQuantity);
     $products = Product::getProdustsByIds($productsIds);
 endforeach;  
 foreach ($ordersListOld as $orderOld): 
     $productsQuantityOld = json_decode($orderOld['products'], true);
     $productsIdsOld = array_keys($productsQuantityOld);
     $productsOld = Product::getProdustsByIds($productsIdsOld);
 endforeach; 





        require_once(ROOT . '/views/user/order.php');

        return true;
    }
    
}