<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
/**
     * Carrega a listagem de dados
     */
    public function index()
    {
        $tutores = Tutor::all();

        return view('tutor.list')->with(['tutores'=> $tutores]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
        return view('tutor.form');
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request) //request: métodos enviados no formulário (get ou post)
    {

        $request->validate([
            'nome'=>'required|max:120',
            'cpf'=>'required|max:14',
            'telefone'=>'required|max:15',
            'email'=>'required|max:120',
            'endereco'=>'required|max:300',
        ],[
            'nome.required'=>"O :attribute é obrigatório!",
            'nome.max'=>" Só é permitido 120 caracteres no :attribute !",
            'cpf.required'=>"O :attribute é obrigatório!",
            'cpf.max'=>" Só é permitido 14 caracteres no :attribute !",
            'telefone.required'=>"O :attribute é obrigatório!",
            'telefone.max'=>" Só é permitido 15 caracteres no :attribute !",
            'email.required'=>"O :attribute é obrigatório!",
            'email.max'=>" Só é permitido 120 caracteres no :attribute !",
            'endereco.required'=>"O :attribute é obrigatório!",
            'endereco.max'=>" Só é permitido 300 caracteres no :attribute !",
        ]);

        $dados = ['nome'=> $request->nome,
            'cpf'=> $request->cpf,
            'email'=> $request->email,
            'telefone'=>$request->telefone,
            'endereco'=>$request->endereco,
        ];

        Tutor::create($dados); //ou  $request->all()

        return redirect('tutor')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $tutor = Tutor::find($id); // select * from tutor where id = $id

        return view('tutor.form')->with([
            'tutor'=> $tutor,
            ]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Tutor $tutor)
    {
        $request->validate([
            'nome'=>'required|max:120',
            'cpf'=>'required|max:14',
            'telefone'=>'required|max:15',
            'email'=>'required|max:120',
            'endereco'=>'required|max:300',
        ],[
            'nome.required'=>"O :attribute é obrigatório!",
            'nome.max'=>" Só é permitido 120 caracteres no :attribute !",
            'cpf.required'=>"O :attribute é obrigatório!",
            'cpf.max'=>" Só é permitido 14 caracteres no :attribute !",
            'telefone.required'=>"O :attribute é obrigatório!",
            'telefone.max'=>" Só é permitido 15 caracteres no :attribute !",
            'email.required'=>"O :attribute é obrigatório!",
            'email.max'=>" Só é permitido 120 caracteres no :attribute !",
            'endereco.required'=>"O :attribute é obrigatório!",
            'endereco.max'=>" Só é permitido 300 caracteres no :attribute !",
        ]);

        $dados = ['nome'=> $request->nome,
            'data_nascimento'=> $request->data_nascimento,
            'cpf'=> $request->cpf,
            'email'=> $request->email,
            'telefone'=>$request->telefone,
            'endereco'=>$request->endereco,
        ];

        Tutor::UpdateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('tutor')->with('success', "Atualizado com sucesso!");
    }

    /**
     * Remove o registro do banco de dados
     */
    public function destroy($id)
    {
        $tutor = Tutor::findOrFail($id);

        $tutor->delete();

        return redirect('tutor')->with('success', "Deletado com sucesso!");
    }

    /**
     * Pesquisa e filtra o registro do banco de dados
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $tutores = Tutor::where($request->tipo, 'like', "%". $request->valor."%")->get();
        } else {
            $tutores = Tutor::all();
        }

        return view('tutor.list')->with(['tutores'=> $tutores]);
    }
}

