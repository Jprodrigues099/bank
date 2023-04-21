<?php

namespace App\Console\Commands;

use App\Services\BaasAPI;
use Illuminate\Console\Command;

class ApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:BaasAPI';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $service = new BaasAPI();

        $dd = $service->getBalance();

        // $dd = $service->api->post('/v5/token', [
        //     'client_id' => '41b44ab9a56440.teste.celcoinapi.v5',
        //     'grant_type' => 'client_credentials',
        //     'client_secret' => 'e9d15cde33024c1494de7480e69b7a18c09d7cd25a8446839b3be82a56a044a3'
        // ])->json();
        dd($dd);

        return Command::SUCCESS;
    }
}
