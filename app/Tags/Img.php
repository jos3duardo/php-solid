<?php


namespace App\Tag\Img;


class Img
{
    public function render($src)
    {
        return '<img src="'.$src.'">';
    }
}