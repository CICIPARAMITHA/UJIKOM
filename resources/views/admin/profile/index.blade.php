@extends('admin.tempelate.base')
@section('content')
<div class="card w-[55%]">
    <div class="flex">
        <img src="{{ url('public') }}/{{ $list->gambar }}" alt="Gambar ..." class="w-[200px] h-[250px] rounded-md mr-8">
        <ul>
            <li class="flex items-center">
                <span class="block font-sans text-base text-slate-600">Nama</span>
                <span class="ml-9 mr-3 block">:</span>
                <span class="block font-medium text-base text-slate-400">{{ $list->nama }}</span>
            </li>
            <li class="flex items-center mt-3 mb-3">
                <span class="block font-sans text-base text-slate-600">Email</span>
                <span class="ml-10 mr-3 block">:</span>
                <span class="block font-medium text-base text-slate-400">{{ $list->email }}</span>
            </li>
            <li class="flex items-center" >
                <span class="block font-sans text-base text-slate-600">Password</span>
                <span class="ml-3 mr-3 block">:</span>
                <span class="font-medium text-base text-slate-400 max-w-[100px]">{{ Str::limit($list->password, 10) }}</span>
            </li>
            <li class="flex items-center mt-8">
                <a href="#" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="btn text-sm font-medium px-3 py-2 bg-blue-600 rounded-md hover:shadow-lg text-white hover:text-slate-50">Edit Profile</a>
            </li>
        </ul>
    </div>
</div>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-[rgba(0,0,0,0.3)]">
    <div class="modal-content">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form action="{{ url('admin/profile', $list->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="nama" name="nama" value="{{ $list->nama }}" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="nama"  class="floating-label">Nama</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="email" name="email" value="{{ $list->email }}" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="email"  class="floating-label">Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="password"  class="floating-label">Password</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="file" name="gambar" id="gambar" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="gambar"  class="floating-label">Gambar</label>
                    </div>
                    <div class="flex items-center justify-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button  type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">UPDATE</button>
                        <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">BATAL</button>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
           
        </div>
    </div>
</div>
@endsection