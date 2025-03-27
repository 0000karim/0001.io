<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
// use AnotherNamespace\AdminController;
// Importando o AdminController principal com um alias "MainAdminController"
// use App\Http\Controllers\AdminController as MainAdminController;

// Importando outro AdminController de um namespace diferente
// use AnotherNamespace\AdminController as SecondaryAdminController;

// $mainController = new MainAdminController();
// $secondaryController = new SecondaryAdminController();


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function perfil() {
        return view('admin.perfil');
    }

    public function medicos() {
        return view('admin.medicos');
    }

    public function triagens() {
        return view('admin.triagens');
    }

    public function agendados() {
        return view('admin.agendados');
    }

    public function equipe() {
        return view('admin.equipe');
    }

    public function relatorios() {
        return view('admin.relatorios');
    }

    public function estoque() {
        return view('admin.estoque');
    }

    public function configuracoes() {
        return view('admin.configuracoes');
    }

    public function logout() {
        // Lógica de logout
        auth()->logout();
        return redirect('/login');
    }
}
// app/Http/Controllers/AdminController.php





