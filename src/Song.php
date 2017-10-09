<?php

namespace LuisRovirosa;

class Song
{
    const MAX_BOTTLES = 99;

    public function song(): array
    {
        $sentences = [];
        for ($i = 0; $i <= self::MAX_BOTTLES; $i++) {
            $numberOfBottles = self::MAX_BOTTLES - $i;
            $sentences[] = $this->firstVerseOfStrophe($numberOfBottles);
            $sentences[] = $this->secondVerseOfStrophe($numberOfBottles);
        }
        return $sentences;
    }

    public function firstVerseOfStrophe(int $numberOfBottles): string
    {
        return ucfirst($this->bottlesOnTheWall($numberOfBottles)) . ", "
            . $this->bottles($numberOfBottles) . " of beer.";
    }

    public function secondVerseOfStrophe($numberOfBottles): string
    {
        return $this->action($numberOfBottles) . ", "
            . $this->bottlesOnTheWall($numberOfBottles - 1) . ".";
    }

    public function bottlesOnTheWall(int $numberOfBottles): string
    {
        return $this->bottles($numberOfBottles) . " of beer on the wall";
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

    public function sing(): void
    {
        foreach ($this->song() as $sentence) {
            echo "$sentence\n";
        }
    }
}