# BUILDING ECOMMERCE USING LARAVEL V.5.5.28

## 1. Create project

	> mkdir lara55_jp_ecom
	> cd lara55_jp_ecom
	> php artisan craete-project laravel/laravel==5.5.28 .
	> php artisan serve

## 2. Installing admin template

	> In resources/views create
	  views/admin
	  			/layouts
	  			/orders
	  			/products
	  			/users
	  			dashboard.blade.php

	> In public: add assets
	> php artisan make:contrller DashboardController
	> In DashboardController create index method and return dashbord
	> In routes/web.php: create home route to render index method of the DashboardController	



