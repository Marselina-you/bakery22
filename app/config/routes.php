<?php
return array(

	
	'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    
	'catalog' => 'catalog/index', // actionIndex в CatalogController
	'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController   
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController
    'cart/checkout' => 'cart/checkout', // actionCheckOut в CartController 
    'cart/result' => 'cart/result', // actionResult в CartController 
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController   
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в  в CartController  
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAdd в CartController
    'cart' => 'cart/index', // actionIndex в CartController
    
	'user/register' => 'user/register',//actionRegister b UserController
	//'user/result' => 'user/result',//actionRersult b UserController
	'user/login' => 'user/login',
	'user/loginForOrder' => 'user/loginForOrder',
	'user/logout' => 'user/logout',
	'cabinet/edit' => 'cabinet/edit',//actionEdit in CabinetController
	'cabinet' => 'cabinet/index',
	
	//Управление товарами
	//'create' => 'adminProduct/create',
	'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product/categorya/([0-9]+)' => 'adminProduct/categorya/$1',
    'admin/product' => 'adminProduct/index',
    //'admin/catalog/([0-9]+)' => 'adminProduct/catalog/$1',
   
	
	//управление категориями
	'admin/category/create' => 'adminCategory/create',
	'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
	'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
	'admin/category' => 'adminCategory/index',


		//управление заказами
	'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
	'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
	'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
	'admin/order' => 'adminOrder/index',

	
	'about' => 'about/index',// actionIndex в aboutController
	'admin/categorys/([0-9]+)' => 'admin/categorys/$1', //actionCategorys in adminController
	'categorys/([0-9]+)' => 'admin/categorys/$1',
	'admin' => 'admin/index',
	 //'admin/catalog' => 'adminProduct/index',
	 
	'' => 'site/index',// actionIndex в SiteController 


	);