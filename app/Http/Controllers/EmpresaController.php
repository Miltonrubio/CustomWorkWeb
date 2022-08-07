<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Http\Requests\EmpresaRequest;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function empresa()
    {
        $usuarios = Usuario::orderBy('usuario', 'asc')->paginate(50);
        $empresas = Empresa::orderBy('titulo', 'asc')->paginate(50);
        return view('empresa', compact('empresas', 'usuarios'));
    }

    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $empresas = DB::table('empresas')
            ->select(
                'id',

                'titulo',
                'empresa',
                'paga',
                'vacante',
                'descripcion',
                'descripcion1',
                'descripcion2',
                'descripcion3',
                'descripcion4',
                'usuario'
            )
            ->where('titulo', 'LIKE', '%' . $texto . '%')
            ->orWhere('empresa', 'LIKE', '%' . $texto . '%')
            ->orderBy('titulo', 'asc')
            ->paginate(10);

        return view('index', compact('empresas', 'texto'));
    }

    public function create()
    {
        //$empresas = Empresa::pluck('usuario', 'id');
        return view('create'); //VISTA
    }

    public function store(EmpresaRequest $request)
    {
        Empresa::create($request->validated());

        return redirect('empresa');
    }

    public function contenido(Empresa $empresa)
    {
        return view('contenido', compact('empresa'));
    }

    public function editar(Empresa $empresa)
    {
        return view('editar', compact('empresa'));
    }

    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        $empresa->update($request->all());

        Empresa::create($request->validated());

        return redirect('empresa');
    }

    public function delete(Empresa $empresa)
    {
        Empresa::where('id', $empresa->id)->delete();

        return back();
    }
}
