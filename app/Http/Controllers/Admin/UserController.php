<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoffeeSpace;
use App\Models\EventRoom;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();

        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function dashboard()
    {
        $participants = Participant::all();
        $eventRooms   = EventRoom::all();
        $coffeeSpaces = CoffeeSpace::all();

        return view('admin.main.index', compact(
            'participants',
            'eventRooms',
            'coffeeSpaces'
        ));
    }

    public function login(Request $request)
    {
        $dados = $request->all();

        if ($dados && Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']]))
            return redirect()->route('app.root');


        \Session::flash('alert', ['type' => 'error', 'message' => 'Email ou senha inválidos']);

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function adicionar()
    {
        if (!auth()->user()->can('usuario_adicionar')) {
            return redirect()->route('admin.principal');
        }

        return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $request)
    {
        if (!auth()->user()->can('usuario_adicionar')) {
            return redirect()->route('admin.principal');
        }

        $dados = $request->all();

        $usuario           = new User();
        $usuario->name     = $dados['name'];
        $usuario->email    = $dados['email'];
        $usuario->password = bcrypt($dados['password']);
        $usuario->save();

        \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.usuarios');

    }

    public function editar($id)
    {
        if (!auth()->user()->can('usuario_editar')) {
            return redirect()->route('admin.principal');
        }

        $usuario = User::find($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function atualizar(Request $request, $id)
    {

        if (!auth()->user()->can('usuario_editar')) {
            return redirect()->route('admin.principal');
        }

        $usuario = User::find($id);
        $dados   = $request->all();
        if (isset($dados['password']) && strlen($dados['password']) > 5) {
            $dados['password'] = bcrypt($dados['password']);
        } else {
            unset($dados['password']);
        }

        $usuario->update($dados);
        \Session::flash('mensagem', ['msg' => 'Registro atualizado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.usuarios');
    }

    public function deletar($id)
    {
        if (!auth()->user()->can('usuario_deletar')) {
            return redirect()->route('admin.principal');
        }

        User::find($id)->delete();
        \Session::flash('mensagem', ['msg' => 'Registro deletado com sucesso!', 'class' => 'green white-text']);
        return redirect()->route('admin.usuarios');

    }

    public function papel($id)
    {
        if (!auth()->user()->can('usuario_editar')) {
            return redirect()->route('admin.principal');
        }

        $usuario = User::find($id);
        $papel   = Papel::all();
        return view('admin.usuarios.papel', compact('usuario', 'papel'));
    }

    public function salvarPapel(Request $request, $id)
    {
        if (!auth()->user()->can('usuario_editar')) {
            return redirect()->route('admin.principal');
        }

        $usuario = User::find($id);
        $dados   = $request->all();
        $papel   = Papel::find($dados['papel_id']);
        $usuario->adicionaPapel($papel);
        return redirect()->back();
    }

    public function removerPapel($id, $papel_id)
    {
        if (!auth()->user()->can('usuario_editar')) {
            return redirect()->route('admin.principal');
        }

        $usuario = User::find($id);
        $papel   = Papel::find($papel_id);
        $usuario->removePapel($papel);
        return redirect()->back();
    }


}
