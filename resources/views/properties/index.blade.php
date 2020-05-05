@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Properties</h1>
        <table class="table">
            <thead>
            <tr>
                <th>imagen</th>
                <th>Description</th>
                <th>Price</th>
                <th>Type</th>
                <th></th>
            </tr>
            @foreach($properties as $property)
                @if($property->user_id == $user)
                <tr>
                    <td><img style="width: 150px; height: 100px;" src="{{asset('storage/'.$property->photo)}}"></td>
                    <td>{{$property->description}}</td>
                    <td>{{$property->price}} €</td>
                    <td>{{$property->type}}</td>
                    <td><a href="{{route('propiedades.show', $property->id)}}">ver</a></td>
                    <td><a class="btn btn-primary" href="{{route('propiedades.edit',$property->id)}}">Edit</a></td>
                    <td><form action="{{route('propiedades.destroy', $property->id)}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form></td>
                </tr>

                @endif
            @endforeach
            <td><a class="btn btn-primary" href="{{route('propiedades.create')}}">create</a></td>

            </thead>
        </table>

    </div>

@endsection