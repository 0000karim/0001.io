@extends('layouts.app')

@section('content')
<div class="container">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">

    <h2>Agendar Doação</h2>
    <form action="{{ route('agendar.verificarBI') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="bi">Bilhete de Identidade (BI)</label>
            <input type="text" class="form-control" id="bi" name="bi" required>
        </div>
        <button type="submit" class="btn btn-primary">Verificar</button>
    </form>
</div>
@endsection
