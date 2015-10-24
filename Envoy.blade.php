@servers(['web' => 'root@123.57.92.162'])

@task('deploy')
    cd /usr/share/nginx/jindanlan
    git pull origin master
    service nginx restart
@endtask
