<?php

namespace App\Http\Controllers;

use App\Repositories\CursoRepositories;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public CursoRepositories  $cursoRepository;

    public function __Construct(CursoRepositories $cursoRepository)
    {
        $this->cursoRepository = $cursoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = $this->cursoRepository->list();
        dd($cursos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resposta = $this->cursoRepository->create([
            'Nome' => 'JAva Maldito',
            'Linguagem' => 'Java'
        ]);

        if ($resposta) {
            return 'Criado com sucesso';
        }
        return 'erro ao criar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cursos = $this->cursoRepository->show('eK8cAbiwTiImk29o');
        dd($cursos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $resposta = $this->cursoRepository->update(
            'fK1RLguWDOCjamgd',
            [
                'Nome' => 'Aguia',
                'Linguagem' => 'CArvalho'
            ]
        );

        if ($resposta) {
            return 'Atualizdo com sucesso';
        }
        return 'erro ao criar';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $response = $this->cursoRepository->delete('ohbW8SxgmWd2jkqR');
        if ($response) {
            return 'Deletado com sucesso';
        }
        return 'erro ao deletar';
    }
}
