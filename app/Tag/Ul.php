<?php

namespace App\Tag;

class Ul
{
    public function render($contents)
    {
        return '<ul>'.$contents.'</ul>';
    }
}