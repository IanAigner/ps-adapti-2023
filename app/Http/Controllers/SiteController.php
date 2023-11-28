<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteRequest;
use Illuminate\Http\Request;

// eu que  adicionei oq esta  abaixo
use App\Models\Aluno;
use App\Models\Curso;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AlunoRequest;


class SiteController extends Controller
{

    private $alunos;

    private $cursos;

    public function __construct(Aluno $aluno, Curso $curso){ // serve para colar o model com uma constante que vc temd dentro do controller
        $this->alunos = $aluno;
        $this->cursos = $curso;
    }

    public function index()
    {
        $alunos = $this->alunos->all();
        return view('site.index', compact('alunos'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

    public function search(SiteRequest $request)
    {
        $busca = $request["search"];
        $alunos = $this->alunos
            ->where("nome", "like", "%$busca%")
            ->orWhereHas("curso", function ($query) use ($busca) {
                $query->where("curso", "like", "%$busca%");
            })
            ->paginate(8);
        return view("site.index", compact("alunos"));
    }
}
