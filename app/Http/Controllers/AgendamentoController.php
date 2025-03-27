<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class AgendamentoController extends Controller
// {
    
// }

// namespace App\Http\Controllers;

use App\Models\Doador; // Modelo Doador que ainda vamos criar
use Illuminate\Http\Request;
use PDF; // Para gerar PDFs

class AgendamentoController extends Controller
{
    // Exibe o formulário inicial onde o usuário insere o BI
    public function showAgendarForm()
    {
        return view('agendar.index'); // Essa view será criada
    }

    // Verifica se o doador já está cadastrado no sistema
    public function verificarBI(Request $request)
    {
        $validated = $request->validate([
            'bi' => 'required|string|max:14',
        ]);

        // Busca o doador pelo BI no banco de dados
        $doador = Doador::where('bi', $validated['bi'])->first();

        if ($doador) {
            // Se o doador existe, exibe a próxima página para continuar o agendamento
            return view('agendar.continuar', compact('doador'));
        } else {
            // Se não existe, redireciona para a página de cadastro de agendamento
            return redirect()->route('agendar.registrar')
                             ->with('error', 'Doador não registrado. Favor completar o cadastro.');
        }
    }

    // Processa o agendamento
    public function registrarAgendamento(Request $request)
    {
        $validated = $request->validate([
            'bi' => 'required|string|max:14',
            'nome' => 'required|string|max:255',
            'data' => 'required|date',
        ]);

        // Salva os dados do agendamento no banco de dados
        $agendamento = new Agendamento();
        $agendamento->bi = $validated['bi'];
        $agendamento->nome = $validated['nome'];
        $agendamento->data = $validated['data'];
        $agendamento->save();

        // Gerar PDF com os dados do agendamento
        $pdf = PDF::loadView('pdf.agendamento', compact('agendamento'));

        // Envia um e-mail com o PDF ao administrador (exemplo simples)
        \Mail::to('admin@example.com')->send(new \App\Mail\AgendamentoEmail($pdf));

        return redirect()->route('agendar.confirmacao')->with('success', 'Agendamento realizado com sucesso.');
    }

    // Gera o relatório PDF dos dados do doador
    public function gerarRelatorioPDF($id)
    {
        $doador = Doador::findOrFail($id);
        $pdf = PDF::loadView('pdf.doador', compact('doador'));

        return $pdf->download('relatorio_doador.pdf');
    }
}




class AgendamentoController extends Controller
{
    // Método que exibe o formulário de agendamento
    public function create()
    {
        return view('agendar'); // Exibe a view de agendamento, certifique-se de que 'agendar.blade.php' existe.
    }

    // Método que processa os dados do formulário de agendamento
    public function store(Request $request)
    {
        // Sua lógica para salvar os dados do agendamento
    }
}

