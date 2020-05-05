@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">User</h1>
        <form action="{{route('administrador.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            name
            <br/>
            <input type="text" name="nombre" value="" class="form form-control" required>
            email
            <br/>
            <input type="text" name="email" value="" class="form form-control" required>
            password
            <br/>
            <input type="password" name="password" value="" class="form form-control" required>

            <select name="rol">
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        </br>
    </div>

@endsection