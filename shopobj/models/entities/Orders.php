<?php



namespace app\models\entities;


use app\models\Model;


class Orders extends Model
{
    protected $id;
    protected $name;
    protected $session_id;


    protected $props = [

        'name' => false,
        'session_id' => false
    ];


    public function __construct($session_id = null, $name = null)
    {
        $this->name = $name;
        $this->session_id = $session_id;

    }



}