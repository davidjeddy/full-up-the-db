# Install

    cd /{project root parent}
    git clone *

# Setup

    cd /{project root}
    docker-compose up --build -d
    docker exec -it fillupthedb_php_1 docker-php-ext-install pdo && docker-php-ext-install pdo_mysql

# Run

Bash into the service

    docker exec -it fillupthedb_php_1

## Run the start command

    cd /{project root}
    date && /app/run.sh

## Stop the process

    pkill php && date
