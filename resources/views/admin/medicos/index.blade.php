<!-- resources/views/admin/medicos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Lista de Médicos</h2>
        <a href="{{ route('medicos.create') }}" class="btn btn-primary">Adicionar Médico</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Especialidade</th>
                    <th>Cargo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicos as $medico)
                    <tr>
                        <td>{{ $medico->id }}</td>
                        <td>{{ $medico->nome }}</td>
                        <td>{{ $medico->especialidade }}</td>
                        <td>{{ $medico->cargo }}</td>
                        <td>
                            <a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
