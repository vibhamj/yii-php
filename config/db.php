<?php

/*return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=yii2basic',
    'username' => 'vibha',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];*/

/*return [
    'yiisoft/db-oracle' => [
        'dsn' => 'oci:dbname=localhost/XE;charset=AL32UTF8;',
        'username' => 'system',
        'password' => 'oracle',
    ],
];*/

/*return [
    'yiisoft/db-oracle' => [
        'dsn' => 'oci:dbname=192.168.0.14/XE;charset=AL32UTF8;',
        'username' => 'C##1',
        'password' => 'admin',
    ],
];*/

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'oci:dbname=192.168.0.14:1521/orcl.ht.home;charset=UTF8',
    'username' => 'C##1',
    'password' => 'admin',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

