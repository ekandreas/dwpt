<?php
date_default_timezone_set('Europe/Stockholm');

/**
 * Change the IP to your env
 */
env('docker_ip','192.168.99.100');


task('tests:docker', function () {
    writeln('Starting docker container');
    runLocally('docker-compose up -d');
    sleep(4);
})->desc('Starting docker');


task('tests:wp', function () {
    writeln('Checking out WordPress from SVN');
    runLocally('svn co https://develop.svn.wordpress.org/trunk/ --non-interactive --trust-server-cert  wordpress-develop', 999);
})->desc('Start testing wp');


task('tests:prepp', function () {
    writeln('Config files');
    runLocally("sed 's/docker_ip/{{docker_ip}}/g' wp-tests-config.php > wordpress-develop/wp-tests-config.php");
})->desc('Start testing wp');


task('tests:run', function () {
    writeln('Running phpunit');
    $output = runLocally('cd wordpress-develop && ../vendor/bin/phpunit', 999);
    writeln($output);
})->desc('Start testing wp');


task('tests:cleanup', function () {
    writeln('Killing containers');
    runLocally('docker-compose stop');
    runLocally('docker-compose rm -f');
})->desc('Cleanup');


task('tests', [
    'tests:docker',
    'tests:wp',
    'tests:prepp',
    'tests:run',
    'tests:cleanup',
])->desc('Initialize tests');
