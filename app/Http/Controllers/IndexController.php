<?php

namespace App\Http\Controllers;

use App\Loader\JsonCardLoader;

class IndexController extends MainController
{
    public function index()
    {
        $cardsData = collect($this->getCardsData())->toJson();

        $loader = new JsonCardLoader();

        $cards  = $loader->loadCards($cardsData);

        return view('welcome')->with('cards', $cards);
    }
}
