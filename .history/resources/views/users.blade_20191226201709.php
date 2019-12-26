
@extends('layout.master')
@section('title')
    Users
@endsection
@section('content')
    <div class="container">
        <h1>Users</h1>
        @foreach ($data as $users)
            {{$users}}
        @endforeach
        
    </div>   
@endsection





   

