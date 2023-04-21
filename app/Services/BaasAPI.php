<?php

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class BaasAPI
{

    public PendingRequest $api;

    private function auth()
    {
        return Cache::remember('cellcoinAuth', 2400, function () {
            return Http::asform()->post(config('baas.base_uri') . '/v5/token', [
                'client_id' => config('baas.client_id') ,
                'grant_type' => config('baas.grant_type'),
                'client_secret' => config('baas.client_secret')
            ])->object()->access_token;
        });
    }

    public function getBalance(){
        return $this->auth();
    }
}
