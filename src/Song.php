<?php

namespace LuisRovirosa;

class Song
{
    public function song(): array
    {
        $sentences = [];
        for ($i = 99; $i >= 2; $i--) {
            $sentences[] = $this->bottlesOnTheWall($i);
            $sentences[] = "Take one down and pass it around, " . ($i-1) . " bottles of beer on the wall.";
        }
        $sentences[] = "1 bottle of beer on the wall, 1 bottle of beer.";
        $sentences[] = "Take one down and pass it around, no more bottles of beer on the wall.";
        $sentences[] = "No more bottles of beer on the wall, no more bottles of beer.";
        $sentences[] = "Go to the store and buy some more, 99 bottles of beer on the wall.";
        return $sentences;
    }

    public function sing()
    {
        foreach ($this->song() as $sentence){
            echo "$sentence\n";
        }
    }

    public function bottlesOnTheWall(int $numberOfBottles): string
    {
        return "$numberOfBottles bottles of beer on the wall, $numberOfBottles bottles of beer.";
    }
}