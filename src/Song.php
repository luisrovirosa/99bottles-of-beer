<?php

namespace LuisRovirosa;

class Song
{
    public function song(): array
    {
        $sentences = [];
        for ($i = 99; $i > 97; $i--) {
            $sentences[] = "$i bottles of beer on the wall, $i bottles of beer.";
            $sentences[] = "Take one down and pass it around, " . ($i-1) . " bottles of beer on the wall.";
        }
        return $sentences;
    }
}