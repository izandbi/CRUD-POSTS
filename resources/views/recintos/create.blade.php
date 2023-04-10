<x-layout title="Recintos">
    <h1>Crear Recinto</h1>
    <form action="{{ route('recintos.store') }}" method="POST">
        @csrf

        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach

        <label>
            Nombre 
            <br>
            <input name='nombre' type="text" value="{{ old('nombre') }}">
        </label>
        <br>
        <label>
            Direccion
            <br>
            <input name="direccion" type="text" value="{{ old('direccion') }}">
        </label>
        <br>
        <label>
            Superficie
            <br>
            <input name="superficie" type="text" value="{{ old('superficie') }}">
        </label>
        <br><br>
        <button type="submit"> Enviar </button>
    </form>
</x-layout>