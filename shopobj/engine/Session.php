<?php

namespace app\engine;

class Session
{
    public function destroy()
    {
    return session_destroy();
    }

    public function regenerate()
    {
       return session_regenerate_id();
    }

    public function getId()
    {
       return session_id();
    }

    public function set($key, $value)
    {
        return $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }

}