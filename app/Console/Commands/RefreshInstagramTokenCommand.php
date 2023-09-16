<?php

namespace App\Console\Commands;

use App\AuthInstagram;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class RefreshInstagramTokenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh:auth:instagram';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'refresh instagram token';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $AuthInstagram = new AuthInstagram();
        $AuthInstagram = $AuthInstagram->first();

        $token = $AuthInstagram->token;

        $client = new Client();
        $response = $client->request('GET', "https://graph.instagram.com/refresh_access_token", [
            'query' => [
                'grant_type' => 'ig_refresh_token',
                'access_token' => $token,
            ]
        ]);

        $json = json_decode($response->getBody()->getContents());

        $AuthInstagram->update(['token' => $json->access_token]);
    }
}
