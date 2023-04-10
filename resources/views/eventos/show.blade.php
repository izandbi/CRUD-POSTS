<x-layout title="Evento">
    <h1>Eventos</h1>
    <a href="{{ route('eventos.index') }}"> Regresar a Eventos</a>
    <h2>Página para el evento {{$evento -> nombre  }}</h2>
</x-layout>