<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Mahasiswa{
    public static function daftar_mahasiswa(): array{

        return [
            [
                'id' => '1',
                'nama' => 'Fatih Masrukhan',
                'asal'=> 'Pemalang',
                'kodeAsal'=> 'PML',
            ],
            [
                'id'=> '2',
                'nama'=> 'Nisa Fitri Mawsali',
                'asal'=> 'Sukoharjo',
                'kodeAsal'=> 'SKH',
            ],
            [
                'id'=> '3',
                'nama'=> 'Riyan Hidayat',
                'asal' => 'Surakarta',
                'kodeAsal'=> 'SKA',
            ]
            ];
    }

    public static function find(int $id): array{
        $listMahasiswa = Arr::first(Mahasiswa::daftar_mahasiswa(), fn($listMahasiswa) => $listMahasiswa['id'] == $id);

        if (!$listMahasiswa) {
            abort(404);
        }
        return $listMahasiswa;
    }
}
