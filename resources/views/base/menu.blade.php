<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-7 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <!--<a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>-->
      </div>
      <div class="hidden lg:flex lg:gap-x-12 items-center justify-between">
        <a href="{{route('index')}}" class="hover:text-blue-600">Home</a>
        <a href="{{ route('tutor.index') }}" class="hover:text-blue-600">Tutores</a>
        <a href="{{ route('animal.index') }}" class="hover:text-blue-600">Animais</a>
        <a href="{{ route('consulta.index') }}" class="hover:text-blue-600">Consultas e Procedimentos</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      </div>
    </nav>
  </header>
