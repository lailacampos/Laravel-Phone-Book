<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class ContactListController extends Controller
{
    public function index(Request $request)
    {
        session(['searchName' => request('searchname')]);

        $data = Usuario::withCount('telefones')
            ->when(!request('searchName'), function ($query) {
                $query->whereHas('telefones');
            })
            ->when(request('searchName'), function ($query) {
                $nome = request('searchName');
                $query->where('nome', 'LIKE', '%' . $nome . '%');
            })
            ->orderBy("usuarios.nome")
            ->get();

        return view("index", compact("data"));
    }
}
