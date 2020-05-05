@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">home</h1>

            @foreach($properties as $property)
                @if(auth()->user())
            @if($property->user_id!=$user)
            <img style="width: 350px; height: 300px;" src="{{asset('storage/'.$property->photo)}}">
                <div>{{$property->description}}</div>
                    <div>{{$property->price}} €</div>
                    <div>{{$property->type}}</div>
                    <div><a href="{{route('propiedades.show', $property->id)}}">ver</a></div>



                @endif
            @else
                <img style="width: 350px; height: 300px;" src="{{asset('storage/'.$property->photo)}}">
                <div>{{$property->description}}</div>
                <div>{{$property->price}} €</div>
                <div>{{$property->type}}</div>
                <div><a href="{{route('propiedades.show', $property->id)}}">ver</a></div>

            @endif

                @endforeach


    </div>

@endsection
