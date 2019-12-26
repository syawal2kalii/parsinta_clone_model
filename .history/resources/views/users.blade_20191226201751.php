
@extends('layout.master')
@section('title')
    Users
@endsection
@section('content')
    <div class="container">
        <h1>Users</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
        @foreach ($data as $users)
            
        @endforeach
        </table>
    </div>   
@endsection





   

