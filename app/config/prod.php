<?php



// Doctrine (db)

$app['db.options'] = array(

    'driver'   => 'pdo_mysql',

    'charset'  => 'utf8',

    'host'     => 'mysql.hostinger.fr',

    'port'     => '3306',

    'dbname'   => 'u372711435_kumo',

    'user'     => 'u372711435_kumo',

    'password' => 'CjJJdx11PI9f',

);



// define log parameters

$app['monolog.level'] = 'WARNING';