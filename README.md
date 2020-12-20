# Todolist

Test task:

## Requirements

### Backend
- Docker ([Install](https://docs.docker.com/get-docker/))
- Docker-compose ([Install](https://docs.docker.com/compose/install/))
### Frontend
- node (tested on node v12.20.0) ([v14](https://nodejs.org/en/download/), [v12 Linux](https://computingforgeeks.com/how-to-install-nodejs-on-ubuntu-debian-linux-mint/))
- npm (tested on npm v6.14.8). Mostly it is installed automatically with node.

## Install
Create a directory for project and follow next steps.
Laravel and Vue are separate projects and can be modified and installed independently.
This means that you can install Frontend while docker is building Backend
### Backend
1. From project directory. Clone project from git.
   ```
   git clone https://github.com/tropen/todolist-back.git
   ```
2. Go to todolist-back: 
   `cd todolist-back`
3. Start docker-compose with build option. This may take some time to download and organize containers.
    ```
    docker-compose up --build
    ```
4. To stop docker-compose use command from the folder where it was started (<project>/todolist-back). 
   ```
   docker-compose down
   ```
5. To start backend as server use
   ```
   docker-compose up -d
   ```
6. After docker-compose finishes installation and starts working (their names would be like: php_1, nginx_1 mysql_1) you can continue with laravel installation.
   Find docker container with name like `todolist-back_php_1` and connect to it.
    ```
        docker ps
   
        docker exec -it todolist-back_php_1 sh 
    ```
7. Install laravel in default way from the container.
   Check if composer is installed: `composer -v`
   If it is not installed, then install composer to container.
   `https://getcomposer.org/download/`

   ```   
   composer install
   ```
8. Copy .env from .env.example and check the DB settings. They Mysql was automatically configured with docker-compose. Mysql settings are in docker-compose.yml.
   `cp .env.example .env`
9. Set key. Migrate. Seed.
   ```
   php artisan key:generate
   php artisan migrate:install
   php artisan migrate --seed
   ```
10. exit container, check if site is running: [Link](http://localhost:8001).
    Result should be:
    ```
    {"error":"Wrong request"}
    ```
10. Problems.
    - Permission problem with storage/logs/laravel.log
    ```
    docker exec -it todolist-back_php_1 sh 
     
    chown www-data:www-data -R /var/www/storage
    chmod 775 -R /var/www/storage
    ```
    
    - Problem with routes/config
    ```
    php artisan optimize:clear
    php artisan config:cache
    php artisan route:cache
    ```

### Frontend
1. Move to project directory. 
2. Clone project from git
    ```
    git clone https://github.com/tropen/todolist-front.git
    ```
3. go to folder:
   ```
   cd todolist-front
   ```
4. install dependencies
   ```
   npm i
   ```
5. run in development mode. [Check](http://localhost:8080)
   ```
   npm run serve
   ```
   
## Install
### Backend
### Frontend
