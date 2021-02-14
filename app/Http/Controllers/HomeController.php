<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data=[
            'nama'      => 'SMA N 1 Klaten',
            'alamat'    => 'Jalan Pemuda'
        ];
        return view('v_home', $data);
    }
    public function about($id){
        $data = [
            'id' => $id
        ];
        return view('v_about', $data);
    }
}
