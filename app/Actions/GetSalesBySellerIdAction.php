<?php

namespace App\Actions;

use App\Facades\ApiSellersAndSalesFacade;

class GetSalesBySellerIdAction
{
    public function __invoke($sellerId)
    {
        $response = ApiSellersAndSalesFacade::get("api/sales/$sellerId");

        if ($response->failed()) {
            return;
        }

        return $response->json();
    }
}