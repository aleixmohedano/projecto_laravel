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
                <th></th>
            </tr>
            @foreach($users as $user)
                @foreach($user->roles as $roles)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$roles->name}}</td>
                        <td><form action="{{route('administrador.destroy', $user->id)}}"method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                            </form></td>
                    </tr>
                @endforeach
            @endforeach
            <td><a class="btn btn-primary" href="{{route('administrador.create')}}">create</a></td>

            </thead>
        </table>

    </div>

@endsection
