
{{--VISTA PARA MOSTRAR CADA RECETA--}}

@extends('layouts.app');
@section('content')
{{--<p>{{$receta}}</p>--}}
<article>
    <h1 class="text-center mb-2"> {{$receta->nombre}} </h1>

    <div class="imagen-receta" align="center">
        <img src="/storage/{{$receta->imagen}}" class="w-60">
    </div>
    <hr>
    <div class="receta-data" align="center">
        <p>
            <span class="font-weight-bold text-primary">Categoría:</span>
            {{$receta->categoriaReceta->nombre}}
        </p>

        <p>
            <span class="font-weight-bold text-primary">Creado por:</span>
            {{$receta->autorReceta->name}}
        </p>

        <p>
            <span class="font-weight-bold text-primary">Fecha de creación:</span>
            {{date('d-m-Y', strtotime ($receta->created_at))}}
        </p>
        <hr>

        <div class="ingredientes">
            <h2 class="my-3 text-primary">Ingredientes:</h2>
            {!!$receta->ingredientes!!}
        </div>
        <hr>
        <div class="preparacion">
            <h2 class="my-3 text-primary">Preparación:</h2>
            {!!$receta->preparacion!!}
        </div>
    </div
</article>
    @endsection