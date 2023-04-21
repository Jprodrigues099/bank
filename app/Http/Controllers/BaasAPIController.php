<?php

namespace App\Http\Controllers;

use App\Services\BaasAPI;

class BaasAPIController extends Controller
{
    public function __invoke()
    {

        $service = new BaasAPI();
        return $service->getBalance();

    }
}
