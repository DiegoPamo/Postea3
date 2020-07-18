@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container text-left">
        <h2 class="display-4">PUBLICACIONES RECIENTES</h2>
    </div>
</div>
<div class="container">
 @foreach($lab as $labs)
 <div class="row mb-4 justify-content-md-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ action('PostController@show',$labs->id)}}">{{$labs->title}}</a>
                </h5>
            </div>
            <img src="{{ asset($labs->image)}}" class="card-img-top" alt="...">
        </div>
    </div>
 </div>
 @endforeach
</div>
@endsection 
</body>
</html>