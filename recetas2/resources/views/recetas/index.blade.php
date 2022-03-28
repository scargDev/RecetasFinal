<!-- Heredar todo el html de layout app.blade -->
@extends('layouts.app')

<!-- Inyectae todo el contenido del layout app.blade en yield('content') , se puede cambiar el nombre del layout
content-->
@section('content')
@section('botones')
<a href="{{route('recetas.create')}}" class="btn btn-primary mr-2  text-white">Crear Recetas</a>
@endsection

<h2 class="text-center mb-5"> Administrar Recetas</h2>

<!-- Vista de la opción lsta de recetas y sus acciones-->

<div class="col-mid-10 mx-auto bg-primary p-3">
    <table class="table">
        <thead class="bg primary text-black">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Categoría</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $userRecetas as $userReceta)

                
            
            <tr>
                <td>{{$userReceta->nombre}}</td>
                <td>{{$userReceta->categoriaReceta->nombre}}</td>
                <td>
                    <a href="{{route('recetas.show', ['receta'=>$userReceta->id])}}" class="btn btn-success d-block mb-1">Ver</a>
                    <a href="{{route('recetas.edit', ['receta'=>$userReceta->id])}}" class="btn btn-dark d-block mb-1">Editar</a>
                    {{--<input type="submit" class="btn btn-danger d-block w-100 mb-1" value="Eliminar">--}}
                    <!-- Vue, especificado en app.js-->
                    <eliminar-receta receta-id={{$userReceta->id}}></eliminar-receta>
                    

                </td>
                <td>.......</td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection