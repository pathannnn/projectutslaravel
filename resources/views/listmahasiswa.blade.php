<x-layout>
    <x-slot:judul>
        Detail Mahasiswa
    </x-slot:judul>
    
    <x-slot:isi>
    <h2 class="font-bold text-lg"> {{$listMahasiswa['nama']}}</h2>
    <p>Asal Mahasiswa : {{$listMahasiswa['asal']}}</p>
    <p>Kode Asal Mashasiswa : {{$listMahasiswa['kodeAsal']}}</p>
    </x-slot:isi>
</x-layout>