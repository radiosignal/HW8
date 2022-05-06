<?php

namespace app\models\repositories;
use app\engine\App;

use app\models\entities\Orders;

use app\models\Repository;

class OrdersRepository extends Repository
{

    public  function getOrders($session_id)
    {
        $sql = "SELECT orders.id as orders_id, products.id prod_id, products.image, products.name, products.description, products.price FROM `orders`,`products` WHERE `session_id` = :session_id AND orders.product_id = products.id";

        return App::call()->db->queryAll($sql,['session_id' => $session_id] );
    }

    protected function getEntityClass()
    {
        return Orders::class;
    }


    public function getTableName()
    {
        return 'orders';
    }


}