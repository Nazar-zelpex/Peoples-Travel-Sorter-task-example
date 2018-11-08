<?php

namespace App\Modals;

use App\Contracts\Modals\ICard;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusCard
 *
 * @package App\Modals
 */
class BusCard extends Model implements ICard
{
    use CardTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {

    }
}
