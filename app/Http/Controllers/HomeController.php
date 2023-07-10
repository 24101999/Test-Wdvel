<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //pegar todas a tarefas
    public function index()
    {
        $tarefas = Tarefa::all();

        return view('home', ['tarefas' => $tarefas]);
    }
}