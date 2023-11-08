<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function store(Request $request) {
        $validate = $request->validate([
            'nama' => 'required',
            'telp' => 'required',
            'tanggal' => 'required',
            'keperluan' => 'required',
        ]);

        $data = new Guest();
        $data->nama = $validate['nama'];
        $data->telp = $validate['telp'];
        $data->tanggal = $validate['tanggal'];
        $data->keperluan = $validate['keperluan'];
        $data->save();

        return redirect('/data-disimpan');
    }

    public function login(){
        return view('admin.login');
    }

    public function info() {
        return view('info');
    }
}
