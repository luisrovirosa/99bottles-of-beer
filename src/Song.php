<?php

namespace LuisRovirosa;

class Song
{
    public function song(): array
    {
        $sentences = [];
        for ($i = 99; $i >= 0; $i--) {
            $sentences[] = $this->bottlesOnTheWall($i);
            $sentences[] = $this->action($i) . ", " . $this->bottles($i - 1) . " of beer on the wall.";
        }
        return $sentences;
    }

    public function sing()
    {
        foreach ($this->song() as $sentence) {
            echo "$sentence\n";
        }
    }

    public function bottlesOnTheWall(int $numberOfBottles): string
    {
        return ucfirst($this->bottles($numberOfBottles)) . " of beer on the wall, " . $this->bottles($numberOfBottles) . " of beer.";
    }

    private function bottles(int $numberOfBottles): string
    {
        if ($numberOfBottles === 0) {
            return "no more bottles";
        } elseif ($numberOfBottles === 1) {
            return "1 bottle";
        } elseif ($numberOfBottles === -1) {
            return "99 bottles";
        }
        return "$numberOfBottles bottles";
    }

    public function action(int $numberOfBottles): string
    {
        if ($numberOfBottles === 0) {
            return 'Go to the store and buy some more';
        }
        return "Take one down and pass it around";
    }
}