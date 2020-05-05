@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">New Property</h1>
        <form action="{{route('propiedades.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            Description
            <br/>
            <input type="text" name="description" value="" class="form form-control" required>
            Price
            <br/>
            <input type="text" name="price" value="" class="form form-control" required>
            type
            <br/>
            <select class="list-group " name="type" required>
                <option value="piso">piso</option>
                <option value="casa">casa</option>
                <option value="chale">chale</option>

            </select>            state
            <br/>
            <select class="list-group " name="state" required>
                <option value="venta">vender</option>
                <option value="alquiler">alquilar</option>
            </select>
            {{--<datalist id="owner_id">
                @foreach($users as $user)

                    <option value="{{$user->id}}">{{$user->email}}</option>
                @endforeach
            </datalist>--}}
            <br/>
            <input type="file" name="photo">

            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        </br>
    </div>

@endsection