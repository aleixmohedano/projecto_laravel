@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">{{$property->description}}</h1>

            <img style="width: 350px; height: 300px;" src="{{asset('storage/'.$property->photo)}}">
            <h1>{{$property->price}} €</h1>
            <h1>{{$property->type}}</h1>




    </div>

@endsection