<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;

Route::get('/', function () {
    return view('home');
});

Route::get('/datamahasiswa', function () {
    return view('datamahasiswa', [
        'mahasiswa' => Mahasiswa::daftar_mahasiswa()
    ]);
});

Route::get('datamahasiswa/{id_mahasiswa}', function ($id) {
    $listMahasiswa = Mahasiswa::find($id);
    return view('listMahasiswa', ['listMahasiswa' => $listMahasiswa]);       
});

Route::get('/anggota', function () {
    return view('anggota');
});
