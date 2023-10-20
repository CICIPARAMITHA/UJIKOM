@extends('admin.tempelate.base')
@section('content')
<div class="grid grid-cols-4 gap-4 mb-4">
    <div class="card-info">
        <div class="info-icons bg-green-400">
            <i data-feather="archive"></i>
        </div>
        <div class="info-captions">
            <h2>Total Paket</h2>
            <h1>{{ $paket }}</h1>
        </div>
    </div>
    <div class="card-info">
        <div class="info-icons bg-blue-400">
            <i data-feather="columns"></i>
        </div>
        <div class="info-captions">
            <h2>Total Artikel</h2>
            <h1>{{ $artikel }}</h1>
        </div>
    </div>
    <div class="card-info">
        <div class="info-icons bg-yellow-300">
            <i data-feather="calendar"></i>
        </div>
        <div class="info-captions">
            <h2>Total Event</h2>
            <h1>{{ $event }}</h1>
        </div>
    </div>
    <div class="card-info">
        <div class="info-icons bg-red-500">
            <i data-feather="image"></i>
        </div>
        <div class="info-captions">
            <h2>Total Galeri</h2>
            <h1>{{ $galeri }}</h1>
        </div>
    </div>
    
</div>

@endsection