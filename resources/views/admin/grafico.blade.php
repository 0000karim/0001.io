<!-- resources/views/admin/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gráfico de Doações</title>
    <!-- Incluindo Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluindo Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Gráfico de Doações de Sangue</h2>
            <!-- Gráfico -->
            <canvas id="doacaoChart"></canvas>
        </div>
    </div>
</div>

<script>
    // Dados enviados da controller (doações por mês)
    const doacoes = @json($doacoes);

    // Criando o gráfico
    const ctx = document.getElementById('doacaoChart').getContext('2d');
    const doacaoChart = new Chart(ctx, {
        type: 'bar', // Tipo de gráfico
        data: {
            labels: Object.keys(doacoes), // Mêses
            datasets: [{
                label: 'Doações de Sangue',
                data: Object.values(doacoes), // Número de doações por mês
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

</body>
</html>
