<?php

// Isabel Piedrahita

// Isabel Piedrahita

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class EcoProductsController extends Controller
{
    public function apiWithoutKey()
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = 'http://ec2-34-224-169-145.compute-1.amazonaws.com/public/ecoProductsJson';

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody(), true);

        //dd($responseBody);

        $data = [];
        $data['title'] = 'API';
        $data['responseBody'] = $responseBody;

        return view('ecoproducts.list')->with('data', $data);
    }
}
