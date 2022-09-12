To run the Laravel project:

cd uafrica

composer require laravel/sail --dev && php artisan sail:install

COMPOSE_DOCKER_CLI_BUILD=1 DOCKER_BUILDKIT=1 ./vendor/bin/sail build

./vendor/bin/sail up




//link to the spreadsheet
https://docs.google.com/spreadsheets/d/11Prx4AB7_krtTwIhrNSiq_ZQeOLCwWwJm-SeE2WaUw8/edit#gid=0