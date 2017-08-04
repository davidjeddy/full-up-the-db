# Install

    cd /{project root parent}
    git clone *

# Setup

    cd /{project root}
    docker-compose up --build -d
    docker exec -it fillupthedb_php_1 docker-php-ext-install pdo && docker-php-ext-install pdo_mysql

# Run

    cd /{project root}
    docker exec -it fillupthedb_php_1 /app/index.php
