<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //pegar todos usuarios
    public function getUsuarios()
    {
        $usuarios =  Usuario::all();

        return view('usuarios', ['usuarios' => $usuarios]);
    }
    //criar usuarios
    public function createUsuarios(UsuarioRequest $request)
    {
        date_default_timezone_set('America/Sao_Paulo');
        $usuario = new Usuario;

        $usuario->nome = $request->nome;
        $usuario->cadastrado = date('Y-m-d H:i');

        $usuario->save();
        if (!$request->nome) {
            $post['success'] = false;
            $post['message'] = 'algo deu errado';
            echo json_encode($post);
            return;
        } else {
            $post['success'] = true;
            $post['message'] = 'tudo certo';
            echo json_encode($post);
            return;
        }
    }
    //editar usuarios
    public function updateUsuarios(UsuarioRequest $request, $id)
    {
        //date_default_timezone_set('America/Sao_Paulo');
        $usuario = Usuario::find($request->id);
        $usuario->nome = $request->nome;
        $usuario->alterado = date('Y-m-d H:i');

        $usuario->save();
        return redirect('/usuarios');
    }
    //deletar usuarios
    public function destroyUsuarios(Request $request, $id)
    {
        Usuario::find($id)->delete();

        return redirect('/usuarios');
    }
}
