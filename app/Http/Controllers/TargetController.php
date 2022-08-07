<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Grupo;
use App\Http\Requests\TargetRequest;
use App\Programaeducativo;
use App\Psicologo;
use Illuminate\Http\Request;
use App\Target;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use App\Exports\UsersExport;
use App\Helpers\Login;
use App\Imports\UsersImport;

class TargetController extends Controller
{
    public function index()
    {
        return view('index');
        $query = BD::table('productos')
            ->whereIn('id', $data)
            ->get();
        return $query;
    }

    public function contenido()
    {
        return view('contenido');
    }
    public function login()
    {
        return view('../auth/login');
    }
}
