<?php

namespace app\controllers;
use app\engine\App;


class AdminController extends Controller
{

    public function actionLogin()
    {


        $login = App::call()->request->getParams()['login'];

        $pass = App::call()->request->getParams()['pass'];

        if(App::call()->usersRepository->Auth($login, $pass)){

            header("Location: /");
            die();
        }else{
            die("Not an admin");
        }

    }




    public function actionLogout()
    {



        $session = App::call()->session->regenerate();

        $session->destroy();

        header("Location: /");
        die();

    }






}