<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Tutor;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
         * Carrega a listagem de dados
         */
        public function index()
        {
            $animais = Animal::all();

            return view('animal.list')->with(['animais'=> $animais]);
        }

        /**
         * Carrega o formulário
         */
        public function create()
        {
            $tutores = Tutor::orderBy('nome')->get();

            return view('animal.form')->with(['tutores'=> $tutores]);
        }

        /**
         * Salva os dados do formulário
         */
        public function store(Request $request) //request: métodos enviados no formulário (get ou post)
        {

            $request->validate([
                'nome'=>'required|max:100',
                'peso'=>'required|max:6',
                'raca'=>'required|max:20',
            ],[
                'nome.required'=>"O :attribute é obrigatório!",
                'nome.max'=>" Só é permitido 120 caracteres no :attribute !",
                'peso.required'=>"O :attribute é obrigatório!",
                'peso.max'=>" Só é permitido 8 caracteres no :attribute !",
                'raca.required'=>"O :attribute é obrigatório!",
                'raca.max'=>" Só é permitido 20 caracteres no :attribute !",
            ]);

            $dados = ['nome'=> $request->nome,
                'peso'=> $request->peso,
                'porte'=> $request->porte,
                'raca'=> $request->raca,
                'tutor_id'=>$request->tutor_id,
            ];

            Animal::create($dados); //ou  $request->all()

            return redirect('animal')->with('success', "Cadastrado com sucesso!");
        }

        /**
         * Carrega apenas 1 registro da tabela
         */
        public function show(Animal $animal)
        {
            //
        }

        /**
         * Carrega o formulário para edição
         */
        public function edit($id)
        {
            $animal = Animal::find($id); // select * from animal where id = $id
            // dois pontos (::) indica que find é um método estático, não necessita instanciar

            $tutores = Tutor::orderBy('nome')->get();

            return view('animal.form')->with([
            'animal'=> $animal,
            'tutores'=> $tutores]);
        }

        /**
         * Atualiza os dados do formulário
         */
        public function update(Request $request, Animal $animal)
        {
            $request->validate([
                'nome'=>'required|max:100',
                'peso'=>'required|max:6',
                'raca'=>'required|max:20',
            ],[
                'nome.required'=>"O :attribute é obrigatório!",
                'nome.max'=>" Só é permitido 120 caracteres no :attribute !",
                'peso.required'=>"O :attribute é obrigatório!",
                'peso.max'=>" Só é permitido 8 caracteres no :attribute !",
                'raca.required'=>"O :attribute é obrigatório!",
                'raca.max'=>" Só é permitido 20 caracteres no :attribute !",
            ]);

            $dados = ['nome'=> $request->nome,
                'peso'=> $request->peso,
                'porte'=> $request->porte,
                'raca'=> $request->raca,
                'tutor_id'=>$request->tutor_id,
            ];

            Animal::UpdateOrCreate(
                ['id'=>$request->id],
                $dados);

            return redirect('animal')->with('success', "Atualizado com sucesso!");
        }

        /**
         * Remove o registro do banco de dados
         */
        public function destroy($id)
        {
            $animal = Animal::findOrFail($id);

            $animal->delete();

            return redirect('animal')->with('success', "Deletado com sucesso!");
        }

        /**
         * Pesquisa e filtra o registro do banco de dados
         */
        public function search(Request $request)
        {
            if(!empty($request->valor)){
                $animais = Animal::where($request->tipo, 'like', "%". $request->valor."%")->get();
            } else {
                $animais = Animal::all();
            }

            return view('animal.list')->with(['animais'=> $animais]);
        }
    }


