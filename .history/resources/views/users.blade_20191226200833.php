
@extends('layout.master')
@section('title')
    Users
@endsection
@section('content')
    <div class="container">
        <h1>Users</h1>
        @foreach ($data as $users)
        dd($users)
            <ul>
                <li>{{$users->nama}}</li>
            </ul>
        @endforeach
        
    </div>   
@endsection





   

