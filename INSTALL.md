# Install

git clone
docker-compose up --build

docker exec -it fillupthedb_php_1 bash

install PDO: docker-php-ext-install pdo && docker-php-ext-install pdo_mysql

execute /app/index.php