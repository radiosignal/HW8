<?php

use app\engine\Db;
use app\engine\Session;
use app\engine\Request;
use app\models\repositories\BasketRepository;
use app\models\repositories\UserRepository;
use app\models\repositories\ProductRepository;
use app\models\repositories\OrdersRepository;

return  [
    'root' => dirname(__DIR__),
    'controllers_namespaces'=> 'app\\controllers\\',
    'product_per_page' => 2,
    'views_dir' => dirname(__DIR__) . "../views/",
    'components' => [
        'db' => [
            'class' => Db::class,
            'driver' => 'mysql',
            'host' => '127.0.0.1:3309',
            'login' => 'root',
            'password' => '',
            'database' => 'shopobj',
            'charset' => 'utf8'
        ],
        'request' => [
            'class' => Request::class
        ],
        'basketRepository' => [
            'class' => BasketRepository::class
        ],
        'productRepository' => [
            'class' => ProductRepository::class
        ],
        'usersRepository' => [
            'class' => UserRepository::class
        ],
        'session' => [
            'class' => Session::class
        ],
        'ordersRepository' => [
            'class' => OrdersRepository::class
        ],
    ]
];
