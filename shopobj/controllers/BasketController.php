<?php

namespace app\controllers;
use app\engine\App;

use app\models\entities\Basket;


class BasketController extends Controller
{


    public function actionIndex()
    {
        $session_id = session_id();
        $basket = App::call()->basketRepository->getBasket($session_id);
//        var_dump($basket);
        echo $this->render('basket', [
            'basket' => $basket
        ]);
    }

    public function actionAdd()
    {

        $id = App::call()->request->getParams()['id'];

        $session_id = App::call()->session->getId();

        $basket = new Basket($session_id, $id);
        App::call()->basketRepository->save($basket);
//        var_dump($basket);
        $response = [
            'status' => 'ok',
            'count' => App::call()->basketRepository->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();
    }

    public function actionDelete()
    {
        $id = App::call()->request->getParams()['id'];
        $session_id = App::call()->session->getId();

        $error = "ok";
        $basket = App::call()->basketRepository->getOne($id);
        if(!$basket){
            $error= "error: is not in  basket";
        }else

            if($session_id == $basket->session_id){
                App::call()->basketRepository->delete($basket);
            }else{
                $error = "error: Wrong Session";
        }
        $response = [
            'status' => $error,
            'count' => App::call()->basketRepository->getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();
    }



}

