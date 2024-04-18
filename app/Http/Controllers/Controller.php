<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getApi(Request $request) {

        $search = $request->input('value');

        if(isset($_POST['submit']) and $search) {


            $api = Http::get("https://api.chucknorris.io/jokes/random?category=$search");
            $response = $api->json(); 

            foreach($response as $data) {


            }

         
            
             return view('welcome', ['data' => $data]);
        }


    }

}
