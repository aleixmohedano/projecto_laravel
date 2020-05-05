@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4"> Property: {{$property->id}}</h1>
        <h2 class="my-5">{{$property->description}}</h2>
        <p><strong>Price: </strong>{{$property->price}} €</p>
        <p><strong>Owner email: </strong>{{$email}}</p>
        <br/>
        <br/>
        @if($property->photo!=null)<img src="{{asset('storage/'.$property->photo)}}" width="150px">@endif
        <br/>
        <br/>
        </br>
        <a class="btn btn-info" href="{{route('properties.index')}}">Continue</a>
        <br/>
        <br/>
    </div>

@endsection