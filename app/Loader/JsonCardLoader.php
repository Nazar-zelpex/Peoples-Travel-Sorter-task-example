<?php

namespace App\Loader;

use App\Contracts\Loader\ICardLoader;

/**
 * Class JsonCardLoader
 *
 * @package App\Loader
 */
class JsonCardLoader implements ICardLoader
{
    /**
     * @param string $data
     *
     * @return array
     */
    public function loadCards(string $data): array
    {

    }
}