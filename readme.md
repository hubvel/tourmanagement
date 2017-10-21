Step to install this repo.
1. Clone project
2. Run composer install
3. Run composer dump-autoload
4. Config virtual host (like this: http://local.tourmanagement)
5. Run php artisan migrate
6. Copy .env.dev => .env
 - Config db connection in .env file
 - (Change GOOGLE_MAP_API_KEY if need)