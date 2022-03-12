<?php

class Router
{

	private $routes;

	public function __construct() //прочитаем и запомним роуты
	{
		$routesPath = ROOT.'/config/routes.php'; //путь к роутам
		$this->routes = include($routesPath); //присваиваем св-ву routes массив кот-й хр-ся в файле routes.php
		                                      //при помощи include
	}

	private function getURI() //метод получает строку запроса
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	

	public function run() //анализ запроса и передача управления
	{ 
		//получить строку запроса
		$uri = $this->getURI();
		
		//проверить наличие такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) {
			
		
		//если есть совпадение, определить какой контроллер и action обрабатывают запрос
		if(preg_match("~$uriPattern~", $uri)) {

			$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
			 
			$segments = explode('/', $path);
			
			$controllerName = array_shift($segments) . 'Controller';
			$controllerName = ucfirst($controllerName);
			$actionName = 'action' . ucfirst(array_shift($segments));
			$parameters = $segments;

			//подключить файл класса-контроллера

			$controllerFile = ROOT . '/controllers/' .$controllerName . '.php';
			if (file_exists($controllerFile)) {
				include_once($controllerFile);
			}
		    //создать объект, вызвать метод(action)
		    $controllerObject = new $controllerName;//(т.е. создали объект класса NewsController если вызвали news)
            
			$result = call_user_func_array(array($controllerObject, $actionName), $parameters);

			if ($result != null) { //если есть что то что не false
				//перестаем искать значения роутов и классов к ним прилагающихся
				break;
			}
		}
        
	}
}
}
	