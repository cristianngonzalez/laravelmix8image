composer create-project --prefer-dist laravel/laravel blog "8.*" 

docker build -t laravel8image .  

docker run -d -p 3000:80 -p 8889:3306 --name laravel8app laravel8image

docker ps

docker exec -it laravel8app bash

npm install

composer install

php artisan key:generate

composer require laravel/ui