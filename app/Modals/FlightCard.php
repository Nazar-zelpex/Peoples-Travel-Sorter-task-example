<?php

namespace App\Modals;

use App\Contracts\Modals\ICard;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FlightCard
 *
 * @package App\Modals
 */
class FlightCard extends Model implements ICard
{
    use CardTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {

    }
}
