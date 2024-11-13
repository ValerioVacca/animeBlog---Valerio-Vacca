<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function animeAPI(){

        // $animes = Http::get("https://api.jikan.moe/v4/anime")->json();
        // dd($animes);
        // return view('welcome', ['animes' => $animes['data']]);

        // normalizzazione
        $animes = Http::get("https://api.jikan.moe/v4/anime")->json('data');
        // dd($animes);
        return response($animes);
    }

    // adesso faccio la funzione che mi ritorna la vista
    public function API(){
        return view('API');
    }
}
