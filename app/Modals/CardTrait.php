<?php

namespace App\Modals;

use App\Contracts\Modals\ICard;

/**
 * Trait CardTrait
 *
 * @package App\Modals
 */
trait CardTrait
{
    /**
     * @var
     */
    private $fromPlace;
    /**
     * @var
     */
    private $toPlace;
    /**
     * @var
     */
    private $seat;

    /**
     * @return Place
     */
    public function getToPlace(): Place
    {

    }

    /**
     * @return Place
     */
    public function getFromPlace(): Place
    {

    }

    /**
     * @param ICard $card
     *
     * @return bool
     */
    public function hasFromPlace(ICard $card): bool
    {

    }

    /**
     * @param ICard $card
     *
     * @return bool
     */
    public function hasToPlace(ICard $card): bool
    {

    }
}