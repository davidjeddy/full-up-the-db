# Install

    cd /{project root parent}
    git clone *

# Setup

    cd /{project root}
    docker-compose up --build -d
    docker exec -it fillupthedb_php_1 docker-php-ext-install pdo
    docker exec -it fillupthedb_php_1 docker-php-ext-install pdo_mysql

    Run database.sql SQL script to create the DB schema and tables

# Run

Bash into the service

    docker exec -it fillupthedb_php_1 bash

## Run the start command

    cd /app
    date && /app/run.sh

## Stop the process

    pkill php && date
