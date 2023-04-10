<x-layout title="Eventos">
    <h1>Eventos</h1>
    @if (session('status'))
        {{ session('status') }}
    @endif
    
    <br>
    <a href="{{ route('eventos.create') }}"> Crear Evento </a>
    <br><br>
    @foreach ($eventos as $evento)
        <a href="{{ route('eventos.show', $evento) }}">{{ $evento -> nombre }}</a>
        <br>
        <br>
    @endforeach
</x-layout>