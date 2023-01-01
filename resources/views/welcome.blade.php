<section >
    @component('components.layout')
        @slot('title')
            SCHOOL BOOK
        @endslot
    @endcomponent
    @php
            $items = [['route' => '/', 'text' => 'INICIO'],
                      ['route' => '/', 'text' => 'CURSANDO'],
                      ['route' => '/', 'text' => 'DOCUMENTOS'],
                      ['route' => '/', 'text' => 'RUTA'],
                      ['route' => '/', 'text' => 'CERRAR SESION']];
            
        @endphp
        <x-menu :items="$items"></x-menu>
        <h1 class="text-blue-500 text-3xl font-bold underline">
            Hello world!section      </h1>
</section>