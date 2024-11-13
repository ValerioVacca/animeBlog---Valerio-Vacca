<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PublicController extends Controller
{
    public function homepage(){

        // $animes = Http::get("https://api.jikan.moe/v4/anime")->json();
        // dd($animes);
        // return view('welcome', ['animes' => $animes['data']]);

        // normalizzazione
        $animes = Http::get("https://api.jikan.moe/v4/anime")->json('data');
        // dd($animes);
        return view('welcome', ['animes' => $animes]);
    }

    // funzione per la rotta parametrica
    public function show($id){
        // dd($id);
        // vado a prendermi il dettaglio del singolo anime
        $anime = Http::get("https://api.jikan.moe/v4/anime/$id")->json('data');
        // dd($anime);
        return view('show', ['anime' => $anime ]);

    }
}
