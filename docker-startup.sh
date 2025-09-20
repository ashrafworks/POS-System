#!/bin/sh

sleep 10s
php artisan key:generate
# Run migrations (with seed)
php artisan migrate --seed --force
php artisan storage:link
php artisan serve --host 0.0.0.0

