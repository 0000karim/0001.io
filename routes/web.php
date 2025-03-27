<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\AgendamentoController;
// use App\Http\Controllers\AgendamentoController;



Route::get('/', function () {
    return view('welcome');
});
// Route::get('post', function () {
//     return view('post');
// });
// Auth::routes();
// Route::get('/home', [app\http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    Route::resource('donors', DonorController::class);
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard')->middleware('auth');
// Route::get('/admin', function () {
   
// })->middleware('isAdmin');



// routas para os perfils 
// Route::get('/admin/perfil', function () {
//     return view('admin.perfil');
// })->middleware('auth');

// Route::get('/admin/medicos', function () {
//     return view('admin.medicos');
// })->middleware('auth');

// Route::get('/admin/triagens', function () {
//     return view('admin.triagens');
// })->middleware('auth');

// Route::get('/admin/agendados', function () {
//     return view('admin.agendados');
// })->middleware('auth');

// Route::get('/admin/equipe', function () {
//     return view('admin.equipe');
// })->middleware('auth');

// Route::get('/admin/relatorios', function () {
//     return view('admin.relatorios');
// })->middleware('auth');

// Route::get('/admin/estoque', function () {
//     return view('admin.estoque');
// })->middleware('auth');

// Route::get('/admin/configuracoes', function () {
//     return view('admin.configuracoes');
// })->middleware('auth');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
   // Outras rotas de administração
});



// Route::get('/', function () {
//     $tasks = \App\Models\Task::all();
//     return view('welcome' , ['tasks' => $tasks]);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php

Route::get('/admin/grafico', [GraficoController::class, 'index'])->name('admin.grafico');

// routes/web.php



// Rotas do painel administrativo
Route::get('/admin/perfil', [AdminController::class, 'perfil'])->name('perfil');
Route::get('/admin/medicos', [AdminController::class, 'medicos'])->name('medicos');
Route::get('/admin/triagens', [AdminController::class, 'triagens'])->name('triagens');
// Route::get('/admin/agendados', [AdminController::class, 'agendados'])->name('agendados');
Route::get('/admin/equipe', [AdminController::class, 'equipe'])->name('equipe');
Route::get('/admin/relatorios', [AdminController::class, 'relatorios'])->name('relatorios');
Route::get('/admin/estoque', [AdminController::class, 'estoque'])->name('estoque');
Route::get('/admin/configuracoes', [AdminController::class, 'configuracoes'])->name('configuracoes');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');


// chamar cada um 
// routes/web.php



Route::prefix('admin')->group(function () {
    Route::get('medicos', [MedicoController::class, 'index'])->name('medicos.index');
    Route::get('medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
    Route::post('medicos', [MedicoController::class, 'store'])->name('medicos.store');
    Route::get('medicos/{id}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');
    Route::put('medicos/{id}', [MedicoController::class, 'update'])->name('medicos.update');
    Route::delete('medicos/{id}', [MedicoController::class, 'destroy'])->name('medicos.destroy');
});
Route::get('admin/medicos/create', [MedicoController::class, 'create'])->name('admin.medicos.create');
Route::post('admin/medicos', [MedicoController::class, 'store'])->name('admin.medicos.store');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Outras rotas de admin...
});


Route::get('/agendar', [AgendamentoController::class, 'showAgendarForm'])->name('agendar.form');
Route::post('/agendar/verificar', [AgendamentoController::class, 'verificarBI'])->name('agendar.verificarBI');
// Route::post('/agendar/registrar', [AgendamentoController::class, 'registrarAgendamento'])->name('agendar.registrar');
Route::post('/agendar/registrar', [AgendamentoController::class, 'registrar']);
Route::get('/agendar/pdf/{id}', [AgendamentoController::class, 'gerarRelatorioPDF'])->name('agendar.pdf');

Route::get('/agendar', [AgendamentoController::class, 'create'])->name('agendar.create');  // Exibir o formulário
// Route::post('/agendar/registrar', [AgendamentoController::class, 'store'])->name('agendar.registrar');  // Processar o formulário







// Rota para exibir o formulário de agendamento
// Route::get('/agendar', function() {
//     return view('agendar'); 
    // Exibe o formulário agendar.blade.php
// });

// Rota para processar a requisição AJAX do agendamento
// Route::post('/agendar/registrar', [AgendamentoController::class, 'registrar']);





// Route::post('/agendar/registrar', [AgendamentoController::class, 'store'])->name('agendar.registrar');

