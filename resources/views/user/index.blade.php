@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Properties</h1>
        <table class="table">
            <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>rol</th>
                <th></th>
            </tr>
            @foreach($users as $user)

                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->rol}}</td>
                        <td><form action="{{route('usuarios.destroy', $user->id)}}"method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                            </form></td>
                    </tr>

            @endforeach
            <td><a class="btn btn-primary" href="{{route('propiedades.create')}}">create</a></td>

            </thead>
        </table>

    </div>

@endsection