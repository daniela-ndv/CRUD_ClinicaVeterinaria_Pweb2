
@extends('base.app')
@section("titulo", 'Listagem de Consultas')
@section('content')

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @php
        if(!empty($consulta->id)){
            $route = route('consulta.update', $consulta->id);
        } else{
            $route = route('consulta.store');
        }
    @endphp

    <div class="mx-auto py-12 divide-y md:max-w-4xl">
        <div class="py-12">
        <h3 class="pt-4 text-2xl font-medium py-4">Formulário de consulta</h3>

        <form action="{{ $route }}" method="post" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4">
            @csrf <!-- cria um hash de segurança -->

            @if (!empty($consulta->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id" value="@if (!empty($consulta->id)){{$consulta->id}}@elseif(!empty(old('id'))){{old('id')}}@else{{''}}@endif">

            <label class="block">
                <span>Paciente</span>
                <select name="animal_id" id="" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black">
                    @foreach ($animais as $item)
                        <option value="{{ $item->id }}"
                            @if(!empty($consulta->id)){{ ( $item->id == $consulta->animal_id) ? 'selected' : '' }}
                            @else{{ '' }}@endif >{{$item->nome}}
                        </option>
                    @endforeach
                </select>
            </label><br><br>

            <div class="flex">
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span class="text-gray-700">Data</span>
                        <input type="date" name="data" placeholder="00/00/0000" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($consulta->data)){{$consulta->data}}@elseif(!empty(old('consulta'))){{old('consulta')}}@else{{''}}@endif">
                    </label>
                </div>
                <div class="w-1/2 ml-2">
                    <label class="block">
                        <span class="text-gray-700">Horário</span>
                        <input type="text" name="hora" placeholder="00:00" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($consulta->hora)){{$consulta->hora}}@elseif(!empty(old('hora'))){{old('hora')}}@else{{''}}@endif">
                    </label>
                </div>
            </div><br><br>

            <label class="block">
                <span class="text-gray-700">Tipo</span>
                <select name="tipo" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                  value="@if(!empty($consulta->tipo)){{$consulta->tipo}}@elseif(!empty(old('tipo'))){{old('tipo')}}@else{{''}}@endif">
                      <option value="Exame"
                          @if(!empty($consulta->id)){{ ( $consulta->tipo == "Exame") ? 'selected' : '' }}
                          @else{{ '' }}@endif>Exame
                      </option>
                      <option value="Cirurgia"
                          @if(!empty($consulta->id)){{ ( $consulta->tipo == "Cirurgia") ? 'selected' : '' }}
                          @else{{ '' }}@endif>Cirurgia
                      </option>
                      <option value="Curativo"
                          @if(!empty($consulta->id)){{ ( $consulta->tipo == "Curativo") ? 'selected' : '' }}
                          @else{{ '' }}@endif>Curativo
                      </option>
                  </select>
            </label><br><br>

            <label class="block">
                <span class="text-gray-700">Descrição</span>
                <input type="text" name="descricao" placeholder="Detalhes da consulta" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                value="@if(!empty($consulta->descricao)){{$consulta->descricao}}@elseif(!empty(old('descricao'))){{old('descricao')}}@else{{''}}@endif">
            </label><br><br>

            <button class="rounded-2xl bg-blue-300 px-4 py-2 w-32 font-bold hover:bg-blue-400" type="submit">Salvar</button>
            <a href="{{ route('consulta.index') }}"><button type="button" class="rounded-2xl bg-gray-300 px-4 py-2 w-32 font-bold hover:bg-gray-400">Voltar</button></a>
        </form>
    </div>
    </div>
@endsection


