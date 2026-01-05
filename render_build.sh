#!/usr/bin/env bash
set -e

echo "🚀 Starting Laravel deployment process..."

# Install dependencies
composer install --no-dev --optimize-autoloader



# Check if APP_KEY is set
if [ -z "${APP_KEY}" ] || [ "${APP_KEY}" == "base64:" ]; then
    echo "⚠️  WARNING: APP_KEY is not set or invalid!"
    echo "Generating new application key..."
    php artisan key:generate --force
else
    echo "✅ Using existing APP_KEY from environment"
fi

# Optimize Laravel
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set storage permissions
chmod -R 775 storage bootstrap/cache

echo "✅ Build process completed!"