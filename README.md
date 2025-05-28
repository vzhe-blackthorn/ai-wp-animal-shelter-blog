# ai-wp-animal-shelter-blog

This repository contains a very small starter WordPress theme for an animal shelter blog.

## Setup project locally

1. Install WordPress locally or use an existing installation.
2. Clone this repository.
3. Copy all files from the repository root into your WordPress installation's `wp-content/themes/ai-wp-animal-shelter-blog` directory.
4. Activate the theme from the WordPress admin dashboard.

## Build and upload the theme

1. From the repository root, create a zip archive containing the theme files:
   ```sh
   zip -r ai-wp-animal-shelter-blog.zip . -x '*.git*'
   ```
2. In WordPress admin, go to **Appearance → Themes** and click **Add New** then **Upload Theme**.
3. Upload the generated `ai-wp-animal-shelter-blog.zip` file and activate it after installation.

## Development and Testing

Use the provided `startup.sh` script to install PHP and any Composer dependencies. This script also runs `php -l` on all PHP files for basic lint checks.

```sh
bash startup.sh
```

Run this once at container startup to prepare the environment for testing.
