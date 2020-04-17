<?php

namespace App;

class Html
{
    public function __call($name, $arguments)
    {
        $class = 'App\Tag\\'.ucfirst($name);
        //instancia a classe
        //chama o metodo render
        //passa os arumentos
        return call_user_func_array([new $class,'render'], $arguments);
    }
}