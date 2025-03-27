<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();  // Obtém todos os usuários
        return view('admin.users.index', compact('users'));  // Retorna a view com os dados
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('admin.users.index')->with('success', 'Usuário atualizado com sucesso');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users.index')->with('success', 'Usuário excluído com sucesso');
    }
}

