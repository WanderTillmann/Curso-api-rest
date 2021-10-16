<?php


namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class CursoRepositories
{
    public function create(array $dados)
    {
        $response = Http::post('http://10.0.0.91:3002/api/apiteste/curso', $dados);
        return $response->successful();
    }

    public function update(string $id, array $dados)
    {
        $response = Http::put("http://10.0.0.91:3002/api/apiteste/curso?id={$id}", $dados);
        return $response->successful();
    }
    public function delete(string $id)
    {
        $response = Http::delete("http://10.0.0.91:3002/api/apiteste/curso?id={$id}");
        return $response->successful();
    }

    public function list()
    {
        $response = Http::get('http://10.0.0.91:3002/api/apiteste/curso');
        if ($response->successful()) {
            return $response->json();
        };
        return [];
    }
    public function show($id)
    {
        $response = Http::get("http://10.0.0.91:3002/api/apiteste/curso?id={$id}");
        if ($response->successful()) {
            return $response->json();
        };
        return [];
    }
}
