<?php

// app/Http/Controllers/MedicoController.php

// namespace App\Http\Controllers;

// use App\Models\Medico;
// use Illuminate\Http\Request;

// class MedicoController extends Controller
// {
//     public function index()
//     {
//         $medicos = Medico::all();
//         return view('admin.medicos.index', compact('medicos'));
//     }

//     public function create()
//     {
//         return view('admin.medicos.create');
//     }

//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'nome' => 'required',
//             'especialidade' => 'required',
//             'cargo' => 'required',
//         ]);

//         Medico::create($validated);

//         return redirect()->route('medicos.index')->with('success', 'Médico criado com sucesso.');
//     }

//     public function edit($id)
//     {
//         $medico = Medico::findOrFail($id);
//         return view('admin.medicos.edit', compact('medico'));
//     }

//     public function update(Request $request, $id)
//     {
//         $validated = $request->validate([
//             'nome' => 'required',
//             'especialidade' => 'required',
//             'cargo' => 'required',
//         ]);

//         $medico = Medico::findOrFail($id);
//         $medico->update($validated);

//         return redirect()->route('medicos.index')->with('success', 'Médico atualizado com sucesso.');
//     }

//     public function destroy($id)
//     {
//         $medico = Medico::findOrFail($id);
//         $medico->delete();

//         return redirect()->route('medicos.index')->with('success', 'Médico removido com sucesso.');
//     }
// }

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all(); // Pegue todos os médicos
        return view('admin.medicos.index', compact('medicos'));
    }
}

