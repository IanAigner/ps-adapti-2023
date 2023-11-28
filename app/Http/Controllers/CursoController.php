<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\CursoRequest;

use App\Models\Categoria;

class CursoController extends Controller
{

    private $cursos; //propriedade (constante)

    public function __construct(Curso $curso){ // construtor
        $this->cursos = $curso;
    }

    public function index()
    {
        $cursos = $this->cursos->all();
        return view('admin.curso.index', compact('cursos'));
    }


    public function create()
    {
        return view('admin.curso.crud', ['cursos' => $this->cursos]);
    }


    public function store(CursoRequest $request)
    {
        $data = $request->all();
        $this->cursos->create($data);
        return redirect()->route('curso.index')->with('success', 'Curso cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $curso = $this->cursos->find($id);
        return view('admin.curso.crud', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $curso = $this->cursos->find($id);

        $curso->update($data);
        return redirect()->route('curso.index')->with('success', 'Curso atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $curso = $this->cursos->find($id);
        $curso->delete();
        return redirect()->route('curso.index')->with('success', 'Curso deletado com sucesso!');
    }
}
