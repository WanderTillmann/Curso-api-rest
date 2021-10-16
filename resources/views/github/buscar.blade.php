@extends('layout.base')

@section('content')
    <h1>Lista de Repositorios do Github</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">url</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($repositorios as $repositorio)
                <tr>
                    <th scope="row">{{ $repositorio['id'] }}</th>
                    <td>{{ $repositorio['name'] }}</td>
                    <td>{{ $repositorio['url'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
