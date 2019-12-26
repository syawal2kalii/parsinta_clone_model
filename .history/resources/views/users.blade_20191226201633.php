
@extends('layout.master')
@section('title')
    Users
@endsection
@section('content')
    <div class="container">
        <h1>Users</h1>
        @foreach ($data as $users)
            @foreach($users as $u)
            {{dd($users)}}
            <ul>
                <li>{{$u}}</li>
            </ul>
            @endforeach
        @endforeach
        
    </div>   
@endsection





   

