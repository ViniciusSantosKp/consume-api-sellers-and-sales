<?php

namespace App\Actions;

use App\Facades\ApiSellersAndSalesFacade;

class GetSellerByIdAction
{
    public function __invoke($seller_id)
    {
        $response = ApiSellersAndSalesFacade::get("api/seller/$seller_id");

        if ($response->failed()) {
            return;
        }

        return $response->json();
    }
}