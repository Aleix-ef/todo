<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:Aleix-ef/todo.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('4.212.15.106')->set('remote_user', 'user-deploy')
                    ->set('identity_file', '~/.ssh/id_rsa')
                    ->set('deploy_path', '/var/www/user-deploy/html');


// Hooks

after('deploy:failed', 'deploy:unlock');
