Here are commands to run this poject on your machine - 

1. Clone the git repo - https://github.com/shobhit91/dbschema.git4
2. Make database with name "TestApp"
3. Open .env file, update database credentials, as of now it has following -

DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=TestApp
DB_USERNAME=root
DB_PASSWORD=Welcome@1

4. After this run this command - "php artisan migrate", this command will create 4 tables along with their respective fields

5. Finally run this command to serve on your local machine - "php artisan serve"
