<?php

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/shopobj/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/shopobj/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'shopobj',
            'user' => 'root',
            'pass' => '',
            'port' => '3309',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'shopobj',
            'user' => 'root',
            'pass' => '',
            'port' => '3309',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'shopobj',
            'user' => 'root',
            'pass' => '',
            'port' => '3309',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
