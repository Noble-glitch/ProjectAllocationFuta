### Getting Started

### Prerequisites

Before you start, make sure you have the following prerequisites installed on your system:

- PHP (>= 8.x)
- Composer
- Laravel (>= 10.x)
- Database (e.g., MySQL, PostgreSQL)

### Installation
Open a command prompt or terminal and follow the instructions below 

1. Clone this repository:

   ```bash
   git clone https://github.com/7j4n1/AllocationFUTA.git
   cd AllocationFUTA 
   ```

2. Install PHP dependencies using Composer:

    ```bash
    composer install
    ```
    or

    ```bash
    composer update
    ```
4. Create a .env file by copying the .env.example file and configure your database settings:
    ```bash
    cp .env.example .env
    ```
    Configure the database config variables as follows:
    Kindly ensure that your mysql is running and you have created the DB_DATABASEname you specified here
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
5. Generate an app key
    ```bash
    php artisan key:generate
    ```
6. Run the migrations:
    ```bash
    php artisan migrate
    ```

    in order to avoid error, endure that you've started your xampp Apache & Msql servers
    and you've created a new database name corresponding to DB_DATABASE value you set
7. Start the development server:
    ```bash
    php artisan serve

    ```
    Laravel API is now up and running on {http://localhost:8000} which is the base url!
   
