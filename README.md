###
Made this according to this figma requirements: https://www.figma.com/file/JNtA1IOojVZ122BZIk0wcT/Partner-locator
This app has functionality of showing single partner page, searching and filtering partners on main page (has 2 types of display: width < 767px and width =>767px)
### Setup

This app uses Laravel . Set up guide: https://gist.github.com/tooinfinity/1e05c33248bc7c7f228b38510ec7298a
In VS code with opened project run the following:
```
composer install
```
This app uses MySQL. To use something different, open up config/Database.php and change the default driver.
To use MySQL, make sure you install it, setup a database and then add your db credentials (database, 
username and password) to the .env.example file and rename it to .env

### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```
### Running  App
```
php artisan key:generate
php artisan serve
```

