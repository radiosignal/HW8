<?php

namespace app\controllers;
use app\engine\App;
use app\models\entities\Orders;

class OrdersController extends Controller
{


    public function actionIndex()
    {
        $session_id = session_id();
        $orders = App::call()->ordersRepository->getOrders($session_id);

        echo $this->render('orders', [
            'orders' => $orders
        ]);
    }




    public function actionDelete()
    {
        $id = App::call()->request->getParams()['id'];
        $session_id = App::call()->session->getId();

        $error = "ok";
        $orders = App::call()->ordersRepository->getOne($id);
        if(!$orders){
            $error= "error: is not in  orders";
        }else

            if($session_id == $orders->session_id){
                App::call()->ordersRepository->delete($orders);
            }else{
                $error = "error: Wrong Session";
            }
        $response = [
            'status' => $error,
            'count' => App::call()->ordersRepository->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();
    }



}

