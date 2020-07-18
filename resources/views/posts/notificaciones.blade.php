@extends('layouts.app')

@section('content')
<div class="container">

 @foreach(Auth::user()->notifications as $notificaciones)
 <div class="row mb-4 justify-content-md-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ action('PostController@show',$notificaciones->data['notificacion'] ) }}">{{ $notificaciones->data["message"] }}</a>
                    
                    Nuevo Comentario en la publicacion: {{ $notificaciones->created_at }}
                    
                </h5>
            </div>   
        </div>
    </div>
 </div>
 @endforeach
</div>
@endsection 