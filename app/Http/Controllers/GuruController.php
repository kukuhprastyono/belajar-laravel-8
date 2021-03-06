<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
    // Latihan 8
    // public function __construct()
    // {
    //     $this->GuruModel = new GuruModel();
    // }
    // public function index(){
    //     $data = [
    //         'guru' => $this->GuruModel->allData()
    //     ];
    //     return view('v_guru', $data);
    // }

    // latihan9
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
    }
    public function index()
    {
        $data = [
            'guru' => $this->GuruModel->allData()
        ];
        return  view('v_guru', $data);
    }
    // latihan 10
    public function detail($id_guru)
    {
        if (!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru)
        ];
        return  view('v_detailGuru', $data);
    }

    // latihan 11
    public function add()
    {
        return view('v_addGuru');
    }

    public function insert()
    {
        Request()->validate([
            'nip_guru' => 'required|unique:tbl_guru,nip_guru|max:4',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'foto_guru' => 'required|mimes:jpg,bmp,png',
        ], [
            'nip_guru.required'  => 'NIP guru wajib diisi',
            'nip_guru.unique'  => 'NIP guru yang sama telah diisikan',
            'nip_guru.max'  => 'NIP guru maksimal 4 karakter',
            'nama_guru.required'  => 'Nama guru wajib diisi',
            'mapel.required'  => 'Mapel guru wajib diisi',
            'foto_guru.required'  => 'Foto guru wajib diisi',
            'foto_guru.mimes'  => 'Tipe foto guru harus jpg/bmp/png',
        ]);

        // latihan 12
        // upload foto
        $file = Request()->foto_guru;
        $fileName   =   Request()->nip_guru . '.' . $file->extension();
        $file->move(public_path('foto-guru'), $fileName);

        $data   = [
            'nip_guru'  =>  request()->nip_guru,
            'nama_guru' =>  request()->nama_guru,
            'mapel'     =>  request()->mapel,
            'foto_guru' =>  $fileName
        ];
        $this->GuruModel->addData($data);
        return redirect()->route('guru')->with('pesan', 'Data berhasil ditambahkan');
    }

    // latihan 13
    // edit
    public function edit($id_guru)
    {
        if (!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru)
        ];
        return view('v_editGuru', $data);
    }

    public function update($id_guru)
    {
        Request()->validate([
            'nip_guru' => 'required|max:4',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'foto_guru' => 'mimes:jpg,bmp,png',
        ], [
            'nip_guru.required'  => 'NIP guru wajib diisi',
            'nip_guru.max'  => 'NIP guru maksimal 4 karakter',
            'nama_guru.required'  => 'Nama guru wajib diisi',
            'mapel.required'  => 'Mapel guru wajib diisi',
            'foto_guru.mimes'  => 'Tipe foto guru harus jpg/bmp/png',
        ]);


        // upload foto
        if (Request()->foto_guru <> "") {
            // jika tidak foto  diganti
            $file = Request()->foto_guru;
            $fileName   =   Request()->nip_guru . '.' . $file->extension();
            $file->move(public_path('foto-guru'), $fileName);

            $data   = [
                'nip_guru'  =>  request()->nip_guru,
                'nama_guru' =>  request()->nama_guru,
                'mapel'     =>  request()->mapel,
                'foto_guru' =>  $fileName
            ];
            $this->GuruModel->editData($id_guru, $data);
        } else {
            // jika tidak foto tidak diganti
            $data   = [
                'nip_guru'  =>  request()->nip_guru,
                'nama_guru' =>  request()->nama_guru,
                'mapel'     =>  request()->mapel
            ];
            $this->GuruModel->editData($id_guru, $data);
        }

        return redirect()->route('guru')->with('pesan', 'Data berhasil dirubah');
    }

    public function delete($id_guru)
    {   
        $guru = $this->GuruModel->detailData($id_guru);
        if ($guru->foto_guru <> "") {
            unlink(public_path('foto-guru').'/'.$guru->foto_guru);
        }
        $this->GuruModel->deleteData($id_guru);
        return redirect()->route('guru')->with('pesan', 'Data berhasil dihapus');
    }
}
