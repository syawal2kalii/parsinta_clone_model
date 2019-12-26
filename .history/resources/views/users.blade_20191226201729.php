
@extends('layout.master')
@section('title')
    Users
@endsection
@section('content')
    <div class="container">
        <h1>Users</h1>
        <table></table>
        @foreach ($data as $users)
            
        @endforeach
        
    </div>   
@endsection





   

