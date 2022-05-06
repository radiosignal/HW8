<?php

namespace app\models\repositories;
use app\engine\Session;
use app\models\entities\User;
use app\models\Model;
use app\models\Repository;
//use http\Client\Curl\User;

class UserRepository extends Repository
{

    public function Auth($login, $pass)
    {
        $user = $this->getWhere('login', $login);
        if ($user != false && password_verify($pass , $user->pass))   {
//            var_dump($user);
//            die();
            $session = (new Session());
            $session->set('login', $login);

            return true;
        }else{
            return false;
        }}



    public  function isAuth()
    {
        return isset($_SESSION['login']);
    }

    public static function isAdmin() {
        if($_SESSION['login'] == 'admin')
        return true;

    }


    public  function getName()
    {
        return $_SESSION['login'];
    }

    protected function getEntityClass()
    {
        return User::class;
    }




    protected function getTableName()
    {
        return  'users';
    }



}