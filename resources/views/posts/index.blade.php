@extends('layouts.app')

@section('content')
<div class="container">
@auth
<div class="form-group">
    <div class="button">
        <a class="btn " style="background-color:purple;color:white;width:150px; height:40px;" href="{{ route('MyPosts') }}" role="button">Mis publicaciones</a>
    </div>
</div>
<div class="form-group">
    <div class="button">
        <a class="btn " style="background-color:red;color:white;width:150px; height:40px;" href="{{ route('editarUsuario') }}" role="button">Editar Perfil</a>
    </div>
</div>

<div class="form-group">
    <div class="button">
        <a class="btn " style="background-color:black;color:white;width:150px; height:40px;" href="{{ route('crear') }}" role="button">Crear Publicacion</a>
    </div>
</div>

<div class="form-group">
    <div class="button">
        <a class="btn " style="background-color:gray;color:white;width:150px; height:40px;" href="{{ route('notificaciones') }}" role="button">Notificaciones</a>
    </div>
</div>


@endauth


 @foreach($publicaciones as $publicacion)
 <div class="row mb-4 justify-content-md-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ action('PostController@show',$publicacion->id)}}">{{$publicacion->title}}</a>
                </h5>
            </div>
            <img src="{{ Storage::url($publicacion->image)}}" class="card-img-top" alt="...">
        </div>
        
        @auth
        <div class="container">
 
            <form method="POST" action="{{ url("posts/{$publicacion->id}") }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn" style="background-color:green;color:white;width:150px; height:40px;margin-top:5px;">Borrar</button>
            </form>
        </div>
        @endauth

    </div>
 </div>
 @endforeach
 {{ $publicaciones->links() }}
</div>
@endsection 
</body>
</html>