<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class gateawayController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function prop(){
        $client = new Client();
        $response = $client->request('GET','https://onecak.azurewebsites.net/?shuffle=5');
        $statuscode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        return $body;
    }

    //
}
