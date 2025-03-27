@extends('layouts.admin')

@section('title', 'Médicos')

@section('content')
    <h2>Lista de Médicos</h2>
    <p>Conteúdo sobre médicos cadastrados no sistema.</p>
@endsection

<!-- resources/views/admin/medicos.blade.php -->

<style> /* Estilo geral da página de médicos */
    .container {
        margin-top: 50px;
    }
    
    h2.text-center {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 20px;
    }
    
    .table {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    
    .table th {
        background-color: #f8f9fa;
        font-size: 16px;
        font-weight: 600;
        color: #333;
    }
    
    .table td {
        font-size: 14px;
        color: #555;
    }
    
    .btn {
        border-radius: 20px;
    }
    
    .btn-primary {
        background-color: #007bff;
        border: none;
    }
    
    .btn-warning {
        background-color: #ffc107;
        border: none;
    }
    
    .btn-danger {
        background-color: #dc3545;
        border: none;
    }
    
    form {
        display: inline;
    }
    
    /* Adiciona algum espaçamento entre os botões */
    .table td .btn-sm {
        margin-right: 5px;
    }
    </style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Gestão de Médicos</h2>
            <a href="{{ route('medicos.create') }}" class="btn btn-primary mb-3">Adicionar Novo Médico</a>

            <!-- Tabela de Médicos -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Especialidade</th>
                        <th>Contato</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicos as $medico)
                    <tr>
                        <td>{{ $medico->nome }}</td>
                        <td>{{ $medico->especialidade }}</td>
                        <td>{{ $medico->contato }}</td>
                        <td>
                            <a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@endsection
