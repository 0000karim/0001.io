{{-- @extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Bem-vindo ao Painel de Controle')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Usuários Registrados</h5>
                    <p class="card-text">100</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Doações Recentes</h5>
                    <p class="card-text">50</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Eventos Próximos</h5>
                    <p class="card-text">3</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!-- resources/views/admin.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Exemplo de Card com Gráfico -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Gráfico de Doações</h3>
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>

        <!-- Exemplo de Card Simples -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Total de Doadores</h3>
                </div>
                <div class="card-body">
                    <h4>450</h4>
                    <p>Doadores cadastrados até hoje.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar', // ou 'line', 'pie', etc.
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
            datasets: [{
                label: 'Doações de Sangue',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection

