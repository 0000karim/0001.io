@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Agendamento para {{ $doador->nome }}</h2>
    <p>Bilhete de Identidade: {{ $doador->bi }}</p>

    {{-- <form action="{{ route('agendar.registrar') }}" method="POST">
        @csrf --}}
        <form action="/agendar/registrar" method="POST">
            <!-- CSRF Token (importante no Laravel) -->
            @csrf
        <input type="hidden" name="bi" value="{{ $doador->bi }}">
        <div class="form-group">
            <label for="data">Data do Agendamento</label>
            <input type="date" class="form-control" id="data" name="data" required>
        </div>
        <button type="submit" class="btn btn-success">Confirmar Agendamento</button>
    </form>
</div>
@endsection
