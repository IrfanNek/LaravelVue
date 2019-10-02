
#Dependencies

Install node js then test with node -v

Install composer then test with composer -V (capital)

#Database if you need it

Install mysql server 5, or 8

If you pick 8 make sure during installation you pick legacy password

Install mysql workbench or php myadmin whatever you like

#Steps

cd to the project directory and run

npm install

composer install

Rename .env.example to .env

php artisan key:generate

#Database Steps

Run your mysql server

create a new database.

In .env and enter your database name your username and password at DB_USERNAME

Go to the config folder and then to database.php

Scroll down to the mysql part enter your database name and username and passowrd

php artisan migrate (If you have connected a database and want to migrate the tables.)

#Run

npm run build -- to build for production

npm run watch -- this builds everytime you change anything in the files to built

open a new command prompt and cd to project directory then run

php artisan serve -- this will start a local development server at port 8000 (you can specify host and port of your choice if you like)
