<?php

namespace App;

class Html
{

    /**
     * @param string $src
     * @return string
     */
    public function img(string $src)
    {
        return '<img src="'.$src.'">';
    }
}