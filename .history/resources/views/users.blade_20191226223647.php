
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
            </tr>
        @foreach ($data as $users)
            <tr>
                <td>{{$users['nama']}}</td>
                <td>{{$users['kelas']}}</td>
                <td>{{$users['Alamat']}}</td>                
            </tr>
        @endforeach
        </table>
    </div>   
@endsection





   

