# Brightlab Laravel Template (Sail + MYSQL + OpenAdmin)

This project will create your laravel project based on Laravel Sail. This project will also install your CMS admin panel based on OpenAdmin.

## Table of Contents

-   [Installation](#installation)

## Installation On MAC

1. Clone the repository to your local machine:

    ```bash
    git clone git@github.com:BRIGHTLAB/laravel-template.git
    ```

2. Navigate to the project directory:

    ```bash
    cd path/laravel-template
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Add .env file and change the following ports:

    ```bash
    APP_PORT, FORWARD_DB_PORT, VITE_PORT
    ```

5. Install Laravel Sail:

    ```bash
    php artisan sail:install
    ```

6. Launch Laravel Sail (Need to have Docker installed):

    ```bash
    ./vendor/bin/sail up
    ```

7. Initialize OpenAdmin:

    ```bash
    php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"
    ```

8. Install OpenAdmin / This will install the database (mysql, etc.):

    ```bash
    DELETE /app/Admin folder
    alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
    sail artisan admin:install
    ```

9. Navigate to localhost/admin:

    ```bash
    username: admin
    password: admin
    ```

10. Install OpenAdmin Scaffolding helper:

    ```bash
    sail artisan admin:import helpers
    ```

## Installation On Windows

1. Clone the repository to your local machine:

    ```bash
    git clone git@github.com:BRIGHTLAB/laravel-template.git
    ```

2. Navigate to the project directory:

    ```bash
    cd path/laravel-template
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Add .env file and replace the following:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_name
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Initialize OpenAdmin:

    ```bash
    php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"
    ```

6. At last run following command to finish install:

    ```bash
    php artisan admin:install
    ```

7. Install OpenAdmin Scaffolding helper:

    ```bash
    php artisan admin:import helpers
    ```

8. Navigate to localhost/admin:
  
    ```bash
    username: admin
    password: admin   
    ```


