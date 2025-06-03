@echo off
echo Clearing Laravel cache...
php artisan optimize:clear
php artisan config:clear
php artisan cache:clear

echo Refreshing database...
php artisan migrate:fresh --seed

echo Done!
pause