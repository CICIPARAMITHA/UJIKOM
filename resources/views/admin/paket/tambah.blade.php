@extends('admin.tempelate.base')
@section('content')
<div class="grid grid-cols-1 gap-4 mb-4">
    <div class="card">
        <div class="header flex items-center">
            <h2 class="header-title">Form Tambah Data Paket</h2>
           
        </div>
        <div class="body">
            
            <form action="{{ url('admin/paket/tambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Paket</label>
                        <input type="text" id="first_name" name="nama" class="bg-white/30 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama paket ..." required>
                    </div>
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Paket</label>
                        <input type="number" id="first_name" name="harga" class="bg-white/30 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga ..." required>
                    </div>
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Paket</label>
                        <input  name="gambar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white/30 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file">
                    </div>
                </div>
                <div class="flex items-center justify-end">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>

                </div>
            </form>

        </div>
    </div>
</div>
    

@endsection