<x-layout>
    <x-slot:judul>
        Detail Mahasiswa
    </x-slot:judul>
    
    <x-slot:isi>
        <ul>
            @foreach ($mahasiswa as $listMahasiswa)
            <a href="datamahasiswa/{{$listMahasiswa ['id']}}" class="text-blue-600 hover:underline">
                <li><br>{{ $listMahasiswa['nama']}}</li>
            </a>
            @endforeach
        </ul>
    </x-slot:isi>
</x-layout>