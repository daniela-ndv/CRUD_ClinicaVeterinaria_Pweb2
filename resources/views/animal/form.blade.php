
@extends('base.app')
@section("titulo", 'Listagem de Animais')
@section('content')

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @php
        if(!empty($animal->id)){
            $route = route('animal.update', $animal->id);
        } else{
            $route = route('animal.store');
        }
    @endphp

    <div class="mx-auto py-12 divide-y md:max-w-4xl">
        <div class="py-12">
        <h3 class="pt-4 text-2xl font-medium py-4">Formulário de Animal</h3>

        <form action="{{ $route }}" method="post" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4">
            @csrf <!-- cria um hash de segurança -->

            @if (!empty($animal->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id" value="@if (!empty($animal->id)){{$animal->id}}@elseif(!empty(old('id'))){{old('id')}}@else{{''}}@endif">

            <div class="flex">
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span class="text-gray-700">Nome</span>
                        <input type="text" name="nome" placeholder="Nome do animal" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($animal->nome)){{$animal->nome}}@elseif(!empty(old('nome'))){{old('nome')}}@else{{''}}@endif">
                    </label>
                </div>
                <div class="w-1/2 ml-2">
                    <label class="block">
                        <span class="text-gray-700">Raça</span>
                        <input type="text" name="raca" placeholder="Raça do animal" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($animal->raca)){{$animal->raca}}@elseif(!empty(old('raca'))){{old('raca')}}@else{{''}}@endif">
                    </label>
                </div>
            </div><br><br>

            <div class="flex">
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span class="text-gray-700">Peso</span>
                        <input type="text" name="peso" placeholder="00,00 Kg" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($animal->peso)){{$animal->peso}}@elseif(!empty(old('peso'))){{old('peso')}}@else{{''}}@endif">
                    </label>
                </div>
                <div class="w-1/2 ml-2">
                    <label class="block">
                        <span class="text-gray-700">Porte</span>
                        <select name="porte" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($animal->porte)){{$animal->porte}}@elseif(!empty(old('porte'))){{old('porte')}}@else{{''}}@endif">
                            <option value="P"
                                @if(!empty($animal->id)){{ ( $animal->porte == "P") ? 'selected' : '' }}
                                @else{{ '' }}@endif>P
                            </option>
                            <option value="M"
                                @if(!empty($animal->id)){{ ( $animal->porte == "M") ? 'selected' : '' }}
                                @else{{ '' }}@endif>M
                            </option>
                            <option value="G"
                                @if(!empty($animal->id)){{ ( $animal->porte == "G") ? 'selected' : '' }}
                                @else{{ '' }}@endif>G
                            </option>
                        </select>
                    </label>
                </div>
            </div><br><br>

            <label class="block">
                <span>Tutor</span>
                <select name="tutor_id" id="" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black">
                    @foreach ($tutores as $item)
                        <option value="{{ $item->id }}"
                            @if(!empty($animal->id)){{ ( $item->id == $animal->tutor_id) ? 'selected' : '' }}
                            @else{{ '' }}@endif >{{$item->nome}}
                        </option>
                    @endforeach
                </select>
            </label><br><br>

            <button class="rounded-2xl bg-blue-300 px-4 py-2 w-32 font-bold hover:bg-blue-400" type="submit">Salvar</button>
            <a href="{{ route('animal.index') }}"><button type="button" class="rounded-2xl bg-gray-300 px-4 py-2 w-32 font-bold hover:bg-gray-400">Voltar</button></a>
        </form>
    </div>
    </div>
@endsection


