<!-- version  -->
PHP 8.2.12
Laravel Framework 8.83.29

<!-- add  new coluam in table after create table  -->
php artisan migrate
php artisan migrate:rollback
php artisan migrate:refresh

<!-- for image  -->
php artisan storage:link

<!-- resource controller  -->
php artisan make:controller ProductController --resource
php artisan make:controller Auth/AuthenticationController
php artisan make:controller UsertController --resource

ALTER TABLE `users`
ADD COLUMN `leave_type` ENUM('pending', 'approve') DEFAULT 'pending';


