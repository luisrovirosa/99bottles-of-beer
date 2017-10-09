<?php

namespace LuisRovirosa;

use PHPUnit\Framework\TestCase;

class Song99BottlesTest extends TestCase
{
    /** @test */
    public function the_first_sentence_is_correct()
    {
        $song = new Song();
        $this->assertEquals('99 bottles of beer on the wall, 99 bottles of beer.', $song->song()[0]);
    }

    /** @test */
    public function the_second_sentence_is_correct()
    {
        $song = new Song();
        $this->assertEquals('Take one down and pass it around, 98 bottles of beer on the wall.', $song->song()[1]);
    }
}