#!/bin/sh

# Install npm dependencies if package.json exists
if [ -f package.json ]; then
  npm install
fi

# Install composer dependencies if composer.json exists
if [ -f composer.json ]; then
  composer install
fi
