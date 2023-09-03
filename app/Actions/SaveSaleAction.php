<?php

namespace App\Actions;

use App\Facades\ApiSellersAndSalesFacade;

class SaveSaleAction
{
    public function __invoke($value, $sellerId)
    {
        $dataToSave = [
            'value' => $value,
            'seller' => $sellerId,
        ];

        $response = ApiSellersAndSalesFacade::post('api/sales', $dataToSave);

        if ($response->failed()) {
            return;
        }

        return $response->json();
    }
}