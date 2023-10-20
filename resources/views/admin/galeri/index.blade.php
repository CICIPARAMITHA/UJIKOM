@extends('admin.tempelate.base')
@section('content')
<div class="grid grid-cols-1 gap-4 mb-4 mt-10">
    <div class="card">
        <div class="header flex items-center justify-between">
            <h2 class="header-title">Data Galeri Wedding</h2>
            <a href="{{ url('admin/galeri/tambah') }}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-md text-sm text-center px-2 mb-2">
                <i data-feather="plus" class="w-[18px]"></i>
            </a>
        </div>
        <div class="body">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="border text-center">
                            <th scope="col" class="border  py-2">Gambar</th>
                            <th scope="col" class="border  py-2">Judul</th>
                            <th scope="col" class="border  py-2">Isi</th>
                            <th scope="col" class="border  py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)
                        <tr class="bg-white border dark:bg-gray-900 dark:border-gray-700 text-center">
                            <td class="border  py-2 flex items-center justify-center">
                                <img class="rounded-lg w-8 h-8" src="{{ url('public') }}/{{ $item->gambar }}" alt="image description">
                            </td>
                            <td class="border  py-2">{{ $item->judul }}</td>
                            <td class="border  py-2">{{ $item->keterangan }}</td>
                            <td class="border  py-2">
                                <div class="flex items-center justify-center gap-1">
                                    <a href="{{ url('admin/galeri/edit', $item->id) }}" class="font-medium text-white dark:text-blue-500 px-3 py-1 bg-blue-600 texts-sm rounded-full">Edit</a>
                                    <a href="{{ url('admin/galeri/hapus', $item->id) }}" class="font-medium text-white dark:text-red-500 px-3 py-1 bg-red-500 texts-sm rounded-full" onclick="return confirm('Yakin ingin menghapus data ini ?!');">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    

@endsection