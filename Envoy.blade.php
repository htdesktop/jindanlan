@servers(['web' => 'root@123.57.92.162'])

@task('deploy',['on' => 'web', 'confirm' => true])
    cd /usr/share/nginx/jindanlan
    git pull origin master
    composer install
    php artisan migrate
@endtask
