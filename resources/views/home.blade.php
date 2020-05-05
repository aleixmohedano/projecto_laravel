@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">home</h1>
        <div class="contenido">
            @foreach($properties as $property)
                @if(auth()->user())
            @if($property->user_id!=$user)
                    <div>
            <img style="width: 350px; height: 300px;" src="{{asset('storage/'.$property->photo)}}">
                <div class="titulo">{{$property->description}}</div>
                    <div>{{$property->price}} €</div>
                    <div>{{$property->type}}</div>
                    <div><a href="{{route('propiedades.show', $property->id)}}">ver</a></div>
                    </div>



                @endif
            @else

                <div>
                        <img style="width: 350px; height: 300px;" src="{{asset('storage/'.$property->photo)}}">
                <div class="titulo">{{$property->description}}</div>
                <div class="precio">{{$property->price}} €</div>
                <div class="tipo">{{$property->type}}</div>
                <div><a href="{{route('propiedades.show', $property->id)}}">ver</a></div>
                    </div>

            @endif

                @endforeach

        </div>
    </div>

@endsection
