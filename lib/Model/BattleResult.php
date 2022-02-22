<?php

class BattleResult
{
    private $winningShip;
    private $losingShip;
    private $usedJediPowers;

    public function __construct(Ship $winningShip, Ship $losingShip, bool $usedJediPowers)
    {
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
        $this->usedJediPowers = $usedJediPowers;

    }

    public function getWinningShip(): Ship
    {
        return $this->winningShip;
    }

    public function getLosingShip(): Ship
    {
        return $this->losingShip;
    }

    public function wereJediPowersUsed(): bool
    {
        return $this->usedJediPowers;
    }

    public function IsThereAWinner(): bool
    {
        return $this->getWinningShip() !== null;
    }

}