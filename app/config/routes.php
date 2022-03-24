<?php
return array(

	
	'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    
	'catalog' => 'catalog/index', // actionIndex в CatalogController
	 'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController   
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController
	'user/register' => 'user/register',
	'' => 'site/index',// actionIndex в SiteController 


	);