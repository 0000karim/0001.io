 {{-- @extends('adminlte::page')

@section('title', 'Painel de Controle')

@section('content_header')
    <h1>Administrador</h1>
@endsection

@section('content') --}}
    {{-- <p>Bem-vindo ao painel de administração!</p> --}}
{{-- @endsection
@section('css')
@endsection
@section('js')
<script> console.log("id, I m using the laravel.AdmiLte postpage"); </script>
@endsection  --}}


@extends('adminlte::page')

@section('title', 'Adinistrador')

{{-- Setup Custom Preloader Content --}}

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Processar</h4>
@stop
{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header') --}}
    {{-- <h1>Dashboard</h1> --}}
{{-- @stop

@section('content') --}}


    {{-- <p>Welcome to this beautiful admin panel.</p> --}}

{{-- @stop

@section('css') --}}
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
{{-- @stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop --}}