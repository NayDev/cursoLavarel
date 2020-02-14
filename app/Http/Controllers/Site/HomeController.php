<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;


class HomeController extends Controller
{
    public function index(){
        $cursos = Curso::paginate(1); //Fazer a paginação -->
        return view('home', compact('cursos'));
    }
}
