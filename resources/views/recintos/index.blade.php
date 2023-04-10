<x-layout title="Recintos">
    <h1>Recintos</h1>

    {{ session('status') }}

    <a href="{{ route('recintos.create') }}">Crear Nuevo</a>
    @foreach ($recintos as $recinto)
    <div>
        <a href="{{ route('recintos.show', $recinto) }}">{{ $recinto -> nombre }}</a>
    </div>
    @endforeach
</x-layout>