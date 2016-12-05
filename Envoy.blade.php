@servers([‘production’ => [deploybot@ 139.162.191.104]])
@task(deploy, ['on' => production])
cd /home/hisfa/hisfa
php artisan down
git reset --hard HEAD
git pull origin master
composer dump-autoload
php artisan migrate:refresh --seed
php artisan up
@endtask

