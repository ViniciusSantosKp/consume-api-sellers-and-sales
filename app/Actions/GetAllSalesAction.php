<?php

namespace App\Actions;

use App\Facades\ApiSellersAndSalesFacade;

class GetAllSalesAction
{
    public function __invoke()
    {
        $response = ApiSellersAndSalesFacade::get('api/sales');

        if ($response->failed()) {
            return;
        }

        return $response->json();
    }
}