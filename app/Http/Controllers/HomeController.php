<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Empresa;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $usuarios = Usuario::orderBy('usuario', 'asc')->paginate(70);

        $empresas = Empresa::orderBy('titulo', 'asc')->paginate(70);
        //DATOS QUE QUEREMOS RECUPERAR  DE CATEGORIA
        $empresas = Empresa::pluck(
            'usuario',
            'id',
            'titulo',
            'empresa',
            'paga'
        );
        return view('home', compact('usuarios', 'empresas'));
    }

    public function create()
    {
        $empresas = Empresa::orderBy('titulo', 'asc')->paginate(5);

        $usuarios = Usuario::orderBy('usuario', 'asc')->paginate(5);
        $usuario = new Usuario();

        $empresas = Empresa::pluck('titulo', 'empresa');
        return view(
            'create_usuario',
            compact('usuario', 'empresas', 'usuarios')
        );
    }

    public function store(UsuarioRequest $request)
    {
        $empresas = Empresa::pluck(
            'usuario',
            'id',
            'titulo',
            'empresa',
            'paga'
        );

        $usuario = Usuario::create($request->all());

        return redirect('home');
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);

        return view('home', compact('usuario'));
    }

    public function editar_usuario(Usuario $usuario)
    {
        $empresas = Empresa::pluck('id', 'usuario', 'titulo');
        return view('editar_usuario', compact('usuario', 'empresas'));
    }

    public function update_usuario(Request $request, Usuario $usuario)
    {
        Usuario::where('id', $usuario->id)->update([
            'usuario' => $request->usuario,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
        ]);

        return redirect('home');
    }

    public function delete_usuario(Usuario $usuario)
    {
        Usuario::where('id', $usuario->id)->delete();
        return back();
    }

    public function contacto()
    {
        return view('contacto');
    }
    public function contacto_index()
    {
        return view('contacto_index');
    }

    public function login_empresa()
    {
        return view('login_empresa');
    }
    public function registrar_empresa()
    {
        return view('registrar_empresa');
    }
}
