#!/bin/sh
set -e

# If .env does not exist, initialize from .env.example
if [ ! -f /var/www/html/.env ]; then
    if [ -f /var/www/html/.env.example ]; then
        cp /var/www/html/.env.example /var/www/html/.env
    else
        cat << 'EOF' > /var/www/html/.env
APP_NAME=Portfolio
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
EOF
    fi
fi

# Ensure APP_KEY exists
if ! grep -q "^APP_KEY=base64:" /var/www/html/.env; then
    php artisan key:generate --force
fi

# Ensure SQLite database exists
mkdir -p /var/www/html/database
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi

# Run migrations if necessary
php artisan migrate --force

# Ensure write permissions for Apache (www-data) on storage, cache, and sqlite database
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

exec "$@"
