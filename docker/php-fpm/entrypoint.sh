#!/usr/bin/env bash

echo 'Flushing config cache'
find /var/www/bootstrap/cache/ -type f ! -name '.gitignore' -delete

echo 'Flushing views cache'
find /var/www/storage/framework/views/ -type f ! -name '.gitignore' -delete

case "$1" in
    "dev" | "developpment")
        echo "Running in $1 environment"
        shift
        /wait_for_it.sh database:3306 -t 120
        ;;

    "migrate")
        echo "Running migrations"
        php artisan migrate
        exit 0
        ;;

    "testing" | "test")
        echo 'Running tests...'
        shift
        /wait_for_it.sh database:3306
        if [[ "$?" != 0 ]]; then
          echo "Could not connect to database"
          exit 1;
        fi
        php /var/www/vendor/bin/phpunit $@
        exit $?
        ;;

    *)
        echo 'Optimize by caching routes and configurations'
        php artisan optimize
        ;;

esac

php-fpm $@
