<?php


namespace App\Tag;


class Img
{
    public function render($src)
    {
        return '<img src="'.$src.'">';
    }
}