<!DOCTYPE html>
<html>
<head>
	<title>Главная страница</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/app.min.css">
	<link rel="stylesheet" href="/sass/main.sass">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <div class="container-fluid">
    	<div class="container-page-title col-lg-12">
    	    <div class="page-title-header d-flex align-items-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
    			<div class="wrap-page-title-header__logo col-lg-3 offset-lg-1  col-md-6 col-sm-5 col-xs-1">
		           <div class="page-title-header__logo col-lg-12 col-md-12 offset-sm-12 col-xs-6"><img src="/template/images/logo.png"/>
		           </div>
		           <div class="size35px fontSans whitecolor text-center batono"><a href="/cart">
               корзина(<span id="cart-count"><?php echo Cart::countItems();?></span>)</a></div>
		        </div>

		        <div class="wrap-page-title-header__menu  col-lg-1 offset-lg-7 col-md-1 offset-md-5 col-sm-1 offset-sm-6 col-xs-1 offset-xs-9">
		           <div class="page-title-header__menu col-lg-12 col-md-12"><img src="/template/images/menu.png">
		           </div>
			    </div>
			</div>
    	    
		    
		</div>