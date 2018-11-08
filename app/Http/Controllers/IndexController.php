<?php

namespace App\Http\Controllers;

use App\Loader\JsonCardLoader;
use App\Sorter\Sorter;

class IndexController extends MainController
{
    public function index()
    {
        $cardsData = collect($this->getCardsData())->toJson();

        $loader = new JsonCardLoader();

        $cards  = $loader->loadCards($cardsData);

        $route  = new Sorter($cards);

        return view('welcome')->with('cards', $route->getOrderedCards());
    }
}
