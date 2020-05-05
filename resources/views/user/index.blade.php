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
                <tr>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->password}}</td>
                    <td>{{$users->roles->name}}</td>

                </tr>
            </thead>
        </table>

    </div>

@endsection