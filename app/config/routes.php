<?php
return array(

	'news/([0-9]+)' => 'news/view/$1',
	'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    
	'catalog' => 'catalog/index', // actionIndex в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController
	'' => 'site/index',// actionIndex в SiteController 


	);