<?php
namespace Deployer;
require 'recipe/common.php';

set('repository','git@github.com:xKoNsTix/uif_calendar.git');

// [Optional] Allocate tty for git clone. Default value is false.
//set('git_tty', true);
// Shared files/dirs between deploys


//Before WP

// set('shared_files', ['public/wp-config.php', 'public/.htaccess']);
// set('shared_dirs', ['public/wp-content/uploads']);
set('keep_releases', 3);


// Writable dirs by web server
set('writable_mode', 'chown');
// set('writable_dirs', ['public/wp-content/uploads']);
set('allow_anonymous_stats', false);

// Hosts
host('Lillesand')
        ->set('remote_user','konsti')


        ->set('deploy_path', '/var/www/uif');
        //->set('deploy_path', '~/app');

// Composer
set('composer_action', false);



task('post-deploy', function () {

    run('sudo chown -R konsti:www-data /var/www/uif');
    run('sudo chmod -R u+rwx /var/www/uif');
  });


// Tasks
desc('Deploy your project');
task('deploy', [
    //'deploy:info',
    'deploy:prepare',
    //'deploy:lock',
    //'deploy:release',
   // 'deploy:update_code',
    //'deploy:shared',
    //'deploy:writable',
    //'deploy:clear_paths',
    //'deploy:symlink',
    //'deploy:unlock',
    'post-deploy',
    'deploy:publish'

]);

task('delete_src_folder', function () {
        run('rm -rf {{release_path}}/src');
    });

// [Optional] If deploy fails automatically unlock.
after('deploy', 'delete_src_folder');

after('deploy:failed', 'deploy:unlock');



