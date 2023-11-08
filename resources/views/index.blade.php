@extends('base.app')
@section("titulo", 'Página inicial')
@section('content')

    <div class="flex">
        <div class="w-1/2">
            <div
            class="flex flex-col rounded-lg h-32 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] md:max-w-xl dark:bg-neutral-700 md:flex-row">
                <img
                class="h-40 w-32 rounded-t-lg object-cover md:h-auto md:!rounded-none md:!rounded-l-lg"
                src="https://scontent.fxap6-1.fna.fbcdn.net/v/t39.30808-6/271239628_4188858791216094_8772335457755997612_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a2f6c7&_nc_ohc=4JBo0y6TvNEAX9uInJN&_nc_ht=scontent.fxap6-1.fna&oh=00_AfAmmS6OkJU0Ctv8fOA3s0yg7N4rxd36m-pK4xMARmHcvA&oe=64F9A698"
                alt="" />
                <div class="flex flex-col justify-start p-6">
                    <h5
                        class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                        Clínica LaVet
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                    A melhor clínica de Santa Catarina!
                    </p>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <div
            class="flex flex-col rounded-lg h-32 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] md:max-w-xl dark:bg-neutral-700 md:flex-row">
            <div class="flex flex-col justify-start p-6">
                <h5
                    class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                    Conheça nossas redes sociais
                </h5>
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                <!-- Facebook -->
                    <button
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                        style="background-color: #1877f2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </button>

                    <!-- Instagram -->
                    <button
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                        style="background-color: #c13584">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </button>
                    <!-- Whatsapp -->
                    <button
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                        style="background-color: #128c7e">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                    </button>
                </p>
            </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div class="-m-1 flex flex-wrap md:-m-2">
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                  <img
                    alt="gallery"
                    class="block h-full w-full rounded-lg object-cover object-center"
                    src="https://pet.crechepetresort.com.br/imagens/onde-fazer-exame-4dx-cachorro.jpg" />
                </div>
              </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                <img
                    alt="gallery"
                    class="block h-full w-full rounded-lg object-cover object-center"
                    src="https://www.dataon.com.br/wp-content/uploads/2021/02/organizar.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                <img
                    alt="gallery"
                    class="block h-full w-full rounded-lg object-cover object-center"
                    src="https://blog-static.petlove.com.br/wp-content/uploads/2019/08/gato-vet.jpg?_gl=1*11g8rt3*_gcl_au*MTE4NTU5OTEzMy4xNjkzNzY3MzUz&_ga=2.142944630.212871342.1693767353-459837882.1693767353" />
                </div>
            </div>
        </div>
      </div><br><br>

      <div class="flex justify-center items-center">
        <h4 class="font-mono text-xl">Encontre nosso endereço:</h4>
      </div>
    <div class="flex justify-center items-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3551.546834258613!2d-52.65405792544728!3d-27.10758120137245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDA2JzI3LjMiUyA1MsKwMzknMDUuMyJX!5e0!3m2!1spt-BR!2sbr!4v1693859231423!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> <br>

@endsection
