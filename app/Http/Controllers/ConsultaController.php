<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Animal;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
         * Carrega a listagem de dados
         */
        public function index()
        {
            $consultas = Consulta::all();

            return view('consulta.list')->with(['consultas'=> $consultas]);
        }

        /**
         * Carrega o formulário
         */
        public function create()
        {

            $animais = Animal::orderBy('nome')->get();

            return view('consulta.form')->with(['animais'=> $animais]);
        }

        /**
         * Salva os dados do formulário
         */
        public function store(Request $request) //request: métodos enviados no formulário (get ou post)
        {

            $request->validate([
                'data'=>'required|max:12',
                'hora'=>'required|max:6',
                'descricao'=>'required|max:300',
            ],[
                'data.required'=>"A :attribute é obrigatória!",
                'data.max'=>" Só é permitido 12 caracteres em :attribute !",
                'hora.required'=>"A :attribute é obrigatória!",
                'hora.max'=>" Só é permitido 6 caracteres em :attribute !",
                'descricao.required'=>"A :attribute é obrigatória!",
                'descricao.max'=>" Só é permitido 300 caracteres em :attribute !",
            ]);

            $dados = ['data'=> $request->data,
                'hora'=> $request->hora,
                'tipo'=> $request->tipo,
                'descricao'=> $request->descricao,
                'animal_id'=>$request->animal_id,
            ];

            Consulta::create($dados); //ou  $request->all()

            return redirect('consulta')->with('success', "Cadastrado com sucesso!");
        }

        /**
         * Carrega apenas 1 registro da tabela
         */
        public function show(Consulta $consulta)
        {
            //
        }

        /**
         * Carrega o formulário para edição
         */
        public function edit($id)
        {
            $consulta = Consulta::find($id); // select * from consulta where id = $id
            // dois pontos (::) indica que find é um método estático, não necessita instanciar

            $animais = Animal::orderBy('nome')->get();

            return view('consulta.form')->with([
            'consulta'=> $consulta,
            'animais'=> $animais]);
        }

        /**
         * Atualiza os dados do formulário
         */
        public function update(Request $request, Consulta $consulta)
        {
            $request->validate([
                'data'=>'required|max:12',
                'hora'=>'required|max:6',
            ],[
                'data.required'=>"A :attribute é obrigatória!",
                'data.max'=>" Só é permitido 12 caracteres em :attribute !",
                'hora.required'=>"A :attribute é obrigatória!",
                'hora.max'=>" Só é permitido 6 caracteres em :attribute !",
            ]);

            $dados = ['data'=> $request->data,
                'hora'=> $request->hora,
                'tipo'=> $request->tipo,
                'descricao'=> $request->descricao,
                'animal_id'=>$request->animal_id,
            ];

            Consulta::UpdateOrCreate(
                ['id'=>$request->id],
                $dados);

            return redirect('consulta')->with('success', "Atualizado com sucesso!");
        }

        /**
         * Remove o registro do banco de dados
         */
        public function destroy($id)
        {
            $consulta = Consulta::findOrFail($id);

            $consulta->delete();

            return redirect('consulta')->with('success', "Deletado com sucesso!");
        }

        /**
         * Pesquisa e filtra o registro do banco de dados
         */
        public function search(Request $request)
        {
            if(!empty($request->valor)){
                $consultas = Consulta::where($request->tipo, 'like', "%". $request->valor."%")->get();
            } else {
                $consultas = Consulta::all();
            }

            return view('consulta.list')->with(['consultas'=> $consultas]);
        }
    }


