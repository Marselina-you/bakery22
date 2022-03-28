<?php
return array(

	
	'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    
	'catalog' => 'catalog/index', // actionIndex в CatalogController
	'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController   
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
	'user/register' => 'user/register',
	'user/login' => 'user/login',
	'user/logout' => 'user/logout',
	'cabinet/edit' => 'cabinet/edit',//actionEdit in CabinetController
	'cabinet' => 'cabinet/index',

	'' => 'site/index',// actionIndex в SiteController 


	);