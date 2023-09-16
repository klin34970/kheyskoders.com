<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use URL;

class InstagramController extends Controller
{
    public function redirect(Request $request){
        try{
            $code = $request->get('code');
            $client = new Client();
            $response = $client->request('POST', "https://api.instagram.com/oauth/access_token", [
                'form_params' => [
                    'client_id' => '237692637560236',
                    'client_secret' => '1403ff303eace5853633e312344f9bac',
                    'grant_type' => 'authorization_code',
                    'redirect_uri' => URL::route('auth.instagram.redirect'),
                    'code' => $code,
                ]
            ]);
            if ($body = $response->getBody()) {
                $content = $body->getContents();
                $short_token = json_decode($content);
                $response = $client->request('GET', "https://graph.instagram.com/access_token", [
                    'query' => [
                        'grant_type' => 'ig_exchange_token',
                        'client_secret' => '1403ff303eace5853633e312344f9bac',
                        'access_token' => $short_token->access_token,
                    ]
                ]);
                if ($body = $response->getBody()) {
                    $content = $body->getContents();
                    $lived_token = json_decode($content);
                }
            }
            return redirect('/');
        }catch(\Exception $e){
        }
    }
}
