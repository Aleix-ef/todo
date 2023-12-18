<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/acoloma-edu/todo.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('192.168.1.137')
    ->set('remote_user', 'ddaw-ud4-deployer')
    ->set('deploy_path', '/var/www/ddaw-ud4-a4/html');

// Hooks
after('deploy:failed', 'deploy:unlock');

task('build', function () {
    run('cd {{release_path}} && build');
});

task('reiniciar-fpm', function () {
    run('sudo /etc/init.d/php8.1-fpm restart');
});

after('deploy', 'reiniciar-fpm');
