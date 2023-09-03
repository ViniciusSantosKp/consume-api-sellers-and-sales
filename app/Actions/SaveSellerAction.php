<?php

namespace App\Actions;

use App\Facades\ApiSellersAndSalesFacade;

class SaveSellerAction
{
    public function __invoke($name, $email)
    {
        $dataToSave = [
            'name' => $name,
            'email' => $email,
        ];

        $response = ApiSellersAndSalesFacade::post('api/sellers', $dataToSave);

        if ($response->failed()) {
            return;
        }

        return $response->json();
    }
}