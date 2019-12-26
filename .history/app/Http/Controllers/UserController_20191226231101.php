<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
            // $data = ['syawal','fian','ulhaq']; //array
            // $data['nama'] = request ('nama');  // array assoc
            $data = array(array("nama" => "Syawal","kelas" => "A3","Alamat"=>"Sidrap"));
            array_push($data,array("nama" => "ulhaq","kelas" => "A3","Alamat"=>"Sidrap"));
            array_push($data, array("nama" => "furqan","kelas" => "A3","Alamat"=>"Sidrap")); 
            // array_push($data,array(array("nama" => "ulhas","kelas" => "A3","Alamat"=>"Sidrap")));
            // dd($data);
                
        return view('users',compact('data'));
    }
}
