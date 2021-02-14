<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
    // latihan 8
    // public function allData(){
    //     return[
    //         [
    //             'nip'   =>  '123',
    //             'nama'  =>  'Andi',
    //             'mapel' =>  'Bahasa'
    //         ],
    //         [
    //             'nip'   =>  '124',
    //             'nama'  =>  'Budi',
    //             'mapel' =>  'Ipa'
    //         ],
    //         [
    //             'nip'   =>  '125',
    //             'nama'  =>  'Caca',
    //             'mapel' =>  'Ips'
    //         ]
    //         ];
    // }

    // latihan 9

    public function allData(){
        return DB::table('tbl_guru')->get();
    }

    // latihan 10
    // detail
    public function detailData($id_guru){
        return DB::table('tbl_guru')->where('id_guru', $id_guru)->first();
    }

    // latihan 12
    // add 
    public function addData($data)
    {
        DB::table('tbl_guru')->insert($data);
    }
}
