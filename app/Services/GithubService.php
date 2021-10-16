<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GithubService
{
    public function buscarRepositorios()
    {
        $response = Http::get('https://api.github.com/search/repositories?q="eltonfonseca"');
        $repositorios = [];
        if ($response->successful()) {
            $repositorios = $response->json()['items'];
        }
        return $repositorios;
    }
}
