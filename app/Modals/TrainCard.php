<?php

namespace App\Modals;

use App\Contracts\Modals\ICard;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TrainCard
 *
 * @package App\Modals
 */
class TrainCard extends Model implements ICard
{
    use CardTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {

    }
}
