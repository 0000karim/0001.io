<!-- resources/views/admin/medicos/create.blade.php -->
@extends('layouts.home')

@section('content')
    <div class="container">
        <h1>Criar Médico</h1>
        <form action="{{ route('medicos.store') }}" method="POST">
            @csrf
            <!-- Adicione os campos do formulário aqui -->
            <button type="submit" class="btn btn-primary">Salvar Médico</button>
        </form>
    </div>
@endsection
