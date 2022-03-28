@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5">
        <!--imagen-->
        </div>

        <div class="col-md-7">
            <h2 class="text-center mb-2 text-primary mb-3">{{$perfil->perfilUser->name}}</h2>
            <a href=" {{$perfil->perfilUser->url}}">Visitar sitio web</a>
            <div class="biografia"> 
                {{$perfil->biografia}}
            </div>
            
        </div>
    
    </div>

</div>

@endsection