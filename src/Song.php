<?php

namespace LuisRovirosa;

class Song
{
    public function song(): array
    {
        $sentences = [];
        for ($i = 99; $i >= 1; $i--) {
            $sentences[] = "$i bottles of beer on the wall, $i bottles of beer.";
            $sentences[] = "Take one down and pass it around, " . ($i-1) . " bottles of beer on the wall.";
        }
        $sentences[] = "No more bottles of beer on the wall, no more bottles of beer.";
        $sentences[] = "Go to the store and buy some more, 99 bottles of beer on the wall.";
        return $sentences;
    }
}