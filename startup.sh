#!/bin/bash
set -e

# Install PHP if not already installed
if ! command -v php >/dev/null 2>&1; then
    echo "Installing PHP..."
    sudo apt-get update
    sudo apt-get install -y php-cli
fi

# Install Composer dependencies if composer.json exists
if [ -f composer.json ]; then
    if ! command -v composer >/dev/null 2>&1; then
        echo "Installing Composer..."
        sudo apt-get install -y composer
    fi
    composer install --no-interaction
fi

# Run PHP syntax check on all PHP files
if command -v php >/dev/null 2>&1; then
    for file in $(git ls-files '*.php'); do
        php -l "$file"
    done
fi

