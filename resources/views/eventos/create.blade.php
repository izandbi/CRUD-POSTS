<x-layout title="Crear Evento"> 

    

    <form action="{{ route('eventos.store') }}" method="POST">
        @csrf
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        <label>
            Nombre
            <br>
            <input name="nombre" type="text" value="{{ old('nombre') }}">
        </label>
        <br>
        <label>
            Fecha
            <br>
            <input name="fecha" type="date" value="{{ old('fecha') }}">
        </label>
        <br>
        <label for="recinto_id">Recinto</label><br>
        <select name="recinto_id" id="recinto_id">
            @foreach ($recintos as $recinto)
                <option value="{{ $recinto -> id }}">{{ $recinto -> nombre }}</option>
            @endforeach
        </select>
        <br>
        <label>
            Descripcion
            <br>
            <input name="descripcion" type="text" value="{{ old('descripcion') }}">
        </label>
        <br>
        <label>
            Precio
            <br>
            <input name="precio" type="text" value="{{ old('precio') }}">
        </label>
        <br>
        <label>
            Aforo
            <br>
            <input name="aforo" type="text" value="{{ old('aforo') }}">
        </label>
        <br>
        <label for="imagen_id">Imagen</label><br>
        <select name="imagen_id" id="imagen_id">
            @foreach ($imagenes as $imagen)
                <option value="{{ $imagen -> id }}">{{ $imagen -> url }}</option>
            @endforeach
        </select>

        <br>
        <button type="submit">Enviar</button>
    </form>

</x-layout>