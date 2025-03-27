<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\Doacao;
use Illuminate\Http\Request;

class GraficoController extends Controller
{
    public function index()
    {
        // Pegando os dados de doações agrupados por mês
        $doacoes = Doacao::selectRaw('MONTH(created_at) as mes, COUNT(*) as total')
            ->groupBy('mes')
            ->pluck('total', 'mes');
        
        // Enviando os dados para a view
        return view('admin.dashboard', compact('doacoes'));
    }
}
