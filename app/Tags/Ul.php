<?php


namespace App\Tags;


class Ul
{
    public function render($src)
    {
        return '<li>'.$src.'</li>';
    }
}