<?php

namespace App\Console\Commands;

use App\AuthInstagram;
use \App\LastMediaInstagram;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class LastMediaInstagramCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'last:media:instagram';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Last instagram media';

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
        $response = $client->request('GET', "https://graph.instagram.com/me/media", [
            'query' => [
                'fields' => 'caption, media_url, media_type',
                'access_token' => $token,
            ]
        ]);

        $json = json_decode($response->getBody()->getContents());

        $LastMediaInstagram = new LastMediaInstagram();

        $LastMediaInstagram->firstOrNew(['media_type' => $json->data[0]->media_type, 'media_url' => $json->data[0]->media_url, 'caption' => $json->data[0]->caption])->save();
    }
}
