<?php

namespace App\Http\Controllers;

use App\Services\GithubService;
use Illuminate\Http\Request;


class GithubController extends Controller
{
    public function buscar(GithubService $GitService)
    {
        $repositorios = $GitService->buscarRepositorios();

        return view('github.buscar', ['repositorios' => $repositorios]);
    }
}
