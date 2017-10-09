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

    public function sing()
    {
        foreach ($this->song() as $sentence) {
            echo "$sentence\n";
        }
    }

    public function firstVerseOfStrophe(int $numberOfBottles): string
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

    /**
     * @param $numberOfBottles
     * @return string
     */
    public function secondVerseOfStrophe($numberOfBottles): string
    {
        return $this->action($numberOfBottles) . ", " . $this->bottles($numberOfBottles - 1) . " of beer on the wall.";
    }
}