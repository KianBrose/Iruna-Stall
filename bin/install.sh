#!/bin/bash


if [ ! -f composer.json ]; then
    echo "Make sure to run this command from the root directory of the repo."
    exit 1
fi

echo "Setting up..."
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev

echo "Finished installing"