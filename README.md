###
Made this Test task according to this figma requirements :https://www.figma.com/file/JNtA1IOojVZ122BZIk0wcT/Partner-locator

### Setup
This app uses Laravel . Set up guide: https://gist.github.com/tooinfinity/1e05c33248bc7c7f228b38510ec7298a
This app uses MySQL. Download XAMPP ,configure it,start module Apache and MySQL
add your db credentials(database, username and password) to the .env file and rename it to .env
### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```
### Running  App
```
Also added single partner page for easy bookmark (click on title of company) and click event on phone number works too

php artisan serve
```
