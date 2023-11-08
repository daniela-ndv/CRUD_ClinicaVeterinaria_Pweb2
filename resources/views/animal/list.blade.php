@extends('base.app')
@section("titulo", 'Listagem de Animais')
@section('content')

    <h3 class="pt-4 text-2xl font-medium py-4">Listagem de Animais</h3> <br>
    <div class="flex">
        <div class="w-5/6">
            <form action="{{ route('animal.search') }}" method="post">
                @csrf
                <p>Filtrar por: </p>
                <select name="tipo" class="data-te-select-init rounded-md w-40">
                    <option value="nome">Nome</option>
                    <option value="peso">Peso</option>
                    <option value="porte">Porte</option>
                    <option value="raca">Raça</option>
                </select>
                <input type="text" name="valor" class="data-te-select-init rounded-md w-80">
                    <button
                        type="submit"
                        class="inline-block rounded border-2 border-slate-300 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-slate-300 hover:bg-neutral-300 hover:text-primary-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10">
                        Buscar
                    </button>
                    <a href="{{route('animal.index')}}">
                        <button
                        type="button"
                        class="inline-block rounded border-2 border-slate-300 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-slate-300 hover:bg-neutral-300 hover:text-primary-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10">
                        Limpar
                        </button>
                    </a>
            </form>
        </div>
        <div class="w-1/6 flex grid content-center float-right">
            <div>
                <br>
                <a href="{{route('animal.create')}}">
                    <button
                    class="inline-block rounded border-2 border-slate-500 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-slate-400 hover:bg-neutral-300 hover:text-primary-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10">
                    Cadastrar Novo
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                  <tr>
                    <th scope="col" class="px-6 py-4">ID</th>
                    <th scope="col" class="px-6 py-4">Nome</th>
                    <th scope="col" class="px-6 py-4">Peso</th>
                    <th scope="col" class="px-6 py-4">Porte</th>
                    <th scope="col" class="px-6 py-4">Raça</th>
                    <th scope="col" class="px-6 py-4">Tutor</th>
                    <th scope="col" class="px-6 py-4">Ações</th>
                  </tr>
                </thead>
                @foreach ($animais as $item)
                <tbody>
                  <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-200 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$item->id}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->nome}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->peso}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->porte}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->raca}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->tutor->nome ?? ""}}</td>
                    <td class="whitespace-nowrap px-6 py-4">
                        <a href="{{route('animal.edit', $item->id)}}">
                            <button
                            type="button"
                            class="inline-block rounded border-2 border-blue-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-blue-600 transition duration-150 ease-in-out hover:border-blue-300 hover:bg-blue-200 hover:text-primary-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10">
                            Editar
                            </button>
                        </a>
                        <a href="{{route('animal.destroy', $item->id)}}">
                            <button
                            onclick="return confirm('Deseja excluir o registro?')"
                            class="inline-block rounded border-2 border-red-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-red-600 transition duration-150 ease-in-out hover:border-red-300 hover:bg-red-200 hover:text-primary-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10">
                            Deletar
                         </button>
                        </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
 @endsection
