<?php

namespace App\Actions;

use App\Facades\ApiSellersAndSalesFacade;

class GetAllSellersAction
{
    public function __invoke()
    {
        $response = ApiSellersAndSalesFacade::get('api/sellers');

        if ($response->failed()) {
            return;
        }

        return $response->json();
    }
}