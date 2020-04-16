<?php

namespace App;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testEsteEUmSimplesExemploDeTeste()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }
}