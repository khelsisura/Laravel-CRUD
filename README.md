# Laravel-CRUD

Laravel API and Resouces and Controller CRUD

How to run the project locally?
- composer install
- Make sure you have .env file default
- php artisan key:generate
- Make sure laravel database is existing
- php artisan migrate (To generate the table into database)
- php artisan serve
- Congrats!!!

#USAGE
http://127.0.0.1:8000/api/userInfo // GET ALL with Pagination
http://127.0.0.1:8000/api/userInfo/{id} // GET SPECIFIC ex: http://127.0.0.1:8000/api/userInfo/1
http://127.0.0.1:8000/crud // For Form CRUD
