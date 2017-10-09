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

    /** @test */
    public function the_third_sentence_is_correct()
    {
        $song = new Song();
        $this->assertEquals('98 bottles of beer on the wall, 98 bottles of beer.', $song->song()[2]);
    }

    /** @test */
    public function the_forth_sentence_is_correct()
    {
        $song = new Song();
        $this->assertEquals('Take one down and pass it around, 97 bottles of beer on the wall.', $song->song()[3]);
    }

    /** @test */
    public function the_last_strophe_is_correct()
    {
        $song = new Song();
        $this->assertEquals('No more bottles of beer on the wall, no more bottles of beer.', $song->song()[198]);
        $this->assertEquals('Go to the store and buy some more, 99 bottles of beer on the wall.', $song->song()[199]);
    }

    /** @test */
    public function the_penultimate_strophe_is_correct()
    {
        $song = new Song();
        $this->assertEquals('1 bottle of beer on the wall, 1 bottle of beer.', $song->song()[196]);
        $this->assertEquals('Take one down and pass it around, no more bottles of beer on the wall.',
            $song->song()[197]);
    }

    /** @test */
    public function the_length_of_the_song_is_correct()
    {
        $song = new Song();
        $this->assertCount(200, $song->song());
    }

    /** @test */
    public function prints_the_song()
    {
        $this->markTestSkipped("Not tested automatically.");
        $song = new Song();
        $song->sing();
    }
}