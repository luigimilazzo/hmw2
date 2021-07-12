<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;


class NYTController extends Controller
{
    public function articoli(){
        $json=Http::get('https://api.nytimes.com/svc/search/v2/articlesearch.json',[
            'q'=>'escapes',
            'api-key'=>env("NYT_APIKEY"),
            'limit'=>10
        ]);
        if($json->failed()) abort(500);
        return $json;
    }

}

?>