<?php

namespace LuisRovirosa;

class Song
{
    public function song(): array
    {
        $sentences = [];
        for ($i = 99; $i >= 2; $i--) {
            $sentences[] = $this->bottlesOnTheWall($i);
            $sentences[] = "Take one down and pass it around, " . $this->bottles($i-1) . " of beer on the wall.";
        }
        $sentences[] = $this->bottles(1) . " of beer on the wall, 1 bottle of beer.";
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
        return $this->bottles($numberOfBottles) . " of beer on the wall, " . $this->bottles($numberOfBottles) . " of beer.";
    }

    private function bottles(int $numberOfBottles): string
    {
        if ($numberOfBottles === 1){
            return "1 bottle";
        }
        return "$numberOfBottles bottles";
    }
}