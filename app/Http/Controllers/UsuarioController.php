<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;

class UsuarioController extends Controller
{
    public function listar(){
        $data = Usuario::all();
        return view('usuarios.listar', compact('data'));
    
    }

   
    
    public function deletar($uuid)
	{
        $this->authorize('delete', Usuario::class);
		
		Usuario::where('uuid',$uuid)->delete();
        
        
        $usuarios = Usuario::all();
		
        return view('usuarios.registrar',  compact('usuario', 'usuarios'));
	}



    public function editar($id){
        $this->authorize('update', Usuario::class);
        $usuario = Usuario::find($id);
        return view('usuarios.editar', compact('usuario'));

    }

    public function atualizar(Request $request, $id){
        $this->authorize('update', Usuario::class);
        
        $dados = $request->all();
        $usuario = Usuario::find($id);

        if(!$dados['senha']){
            $senha_antiga = $usuario->senha;
            $dados['senha'] = $senha_antiga;
            $usuario->update($dados);
        }else{
            $senha_nova = Hash::make($dados['senha']);
            $dados['senha'] = $senha_nova;
            $usuario->update($dados);
        }

        return view('registrar', compact('dados'));
        
    }

    public function registrar(){
        $this->authorize('create', Usuario::class);
        $usuarios = Usuario::all();
        return view ('usuarios.registrar', compact('usuarios'));
    }

    public function salvar(Request $request){

        $dados = $request->all();
        $dados['senha'] = bcrypt($dados['senha']);
        Usuario::create($dados);

        return redirect()->route('registrar');
    }
}
