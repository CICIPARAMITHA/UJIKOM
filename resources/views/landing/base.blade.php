<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alpha Wedding</title>
    <!-- Fonts -->

    <link rel="stylesheet" href="{{ url('public') }}/assets/config/tailwind.css" />
  </head>
  <body class="landing-screen" id="home">
   
    
   
<nav class="navbars" id="navbars">
    <div class="navbars-content">
        <a href="#" class="flex items-center">
            
            <img src="{{ url('public') }}/assets/images/alphaw.jpg" alt="" style="width: 35px;height:35px">
            <span class="brand-title ml-6" id="brand">Alpha Wedding</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="navbars-menus" id="navbar-default">
            <ul class="navbars-menus-ul">
                <li>
                    <a href="#home" class="navbars-menus-item active" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#paket" class="navbars-menus-items">Paket</a>
                </li>
                <li>
                    <a href="#event" class="navbars-menus-items">Event</a>
                </li>
                <li>
                    <a href="#galeri" class="navbars-menus-items">Galeri</a>
                </li>
                <li>
                    <a href="#artikel" class="navbars-menus-items">Artikel</a>
                </li>
                <li>
                    <a href="#kontak" class="navbars-menus-items">Kontak Kami</a>
                </li>
                <li>
                    <a href="{{ url('auth/login') }}" class="navbars-menus-items">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="section-hero">
    <div class="hero-caption" style="left: 50%;top:0%;transform:translate(-50%,50%)">
        <h1>Welcome to !</h1>
        <h2>Alpha Wedding</h2>
        <p class="text-white mt-5 text-center text-xl">Weddingg/Event Planning Agency.</p>
        <a href="{{url('/auth/login') }}" class="px-6 py-4 rounded-full bg-amber-300 min-w-[250px] mt-8 text-black font-bold text-base flex items-center justify-center" style="background: #fde68a">Explore</a>

    </div>
</section>

<section class="p-8 min-h-screen w-screen bg-slate-50 " id="paket">
    <div class="sections-header ">
        <h2 class="title" style="color: #fde68a">Alpha Package</h2>
    </div>
    <div class="section container mx-auto content grid grid-cols-3 gap-4">
        @foreach($paket as $list)
        <div class="p-6 bg-white rounded-md hover:shadow-md">
                <div class="mx-auto">
                    <img src="{{ url('public') }}/{{ $list->gambar }}" class="object-cover h-[210px]" style="height: 250px" />
                </div>
                <h1 class="text-xl font-medium text-slate-500 text-center mt-5 mb-3">{{ $list->nama }}</h1>
                <h1 class="text-2xl font-medium text-red-500 text-center">Rp.{{ $list->harga }}</h1>
        </div>
        @endforeach
    </div>
</section>

<section class="p-8 min-h-screen w-screen bg-slate-50 " id="event">
    <div class="sections-header ">
        <h2 class="title" style="color: #fde68a">Alpha Event</h2>
    </div>
    <div class="section container mx-auto content grid grid-cols-3 gap-4">
        @foreach($event as $list)
        <div class="p-6 bg-white rounded-md hover:shadow-md">
                <img src="{{ url('public') }}/{{ $list->thumbnail }}" class="h-[210px]"  style="height: 250px" />
                <h1 class="text-xl font-medium text-slate-500 text-center mt-5 mb-3">{{ $list->judul }}</h1>
                <h1 class="text-base font-medium text-slate-300 text-center">{!! Str::limit($list->isi, 50) !!}</h1>
        </div>
        @endforeach
    </div>
</section>

<section class="p-8 min-h-screen w-screen bg-slate-50 " id="galeri">
    <div class="sections-header ">
        <h2 class="title" style="color: #fde68a">Alpha Galery</h2>
    </div>
    <div class="section container mx-auto content grid grid-cols-4 gap-3">
        @foreach($galeri as $list)
            <button class="rounded-md hover:shadow-md" data-modal-target="#detail{{ $list->id }}" data-modal-toggle="#detail{{ $list->id }}">
                <img src="{{ url('public') }}/{{ $list->gambar }}" class="rounded-md"  style="height: 250px;width:100%" />
            </button>
             <!-- Main modal -->
        <div id="#detail{{ $list->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-6 overflow-hidden md:inset-0 h-[calc(100%-1rem)] max-h-full bg-[rgba(0,0,0,0.2)]">
            <div class="relative w-full max-w-2xl max-h-full overflow-y-auto min-h-[200px] scroll-smooth">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-6 ">
                    <!-- Modal header -->
                    <img src="{{ url('public') }}/{{ $list->gambar }}"  style="height: 250px;width:100%" />
                    <h1 class="text-xl font-medium text-slate-500 text-center mt-5 mb-3">{{ $list->judul }}</h1>
                    <h1 class="text-base text-slate-500">{!! $list->keterangan !!}</h1>
                   
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="p-8 min-h-screen w-screen bg-slate-50 " id="artikel">
    <div class="sections-header ">
        <h2 class="title" style="color: #fde68a">Alpha Artikel</h2>
    </div>
    <div class="section container mx-auto content grid grid-cols-3 gap-3">
        @foreach($artikel as $list)
        <div class="p-6 bg-white rounded-md hover:shadow-md">
            <img src="{{ url('public') }}/{{ $list->thumbnail }}" />
                <h1 class="text-xl font-medium text-slate-500 text-center mt-5 mb-3">{{ $list->judul }}</h1>
                <h1 class="text-base text-slate-500">{!! Str::limit($list->isi, 50) !!} <button data-modal-target="#detail{{ $list->thumbnail }}" data-modal-toggle="#detail{{ $list->thumbnail }}" class="btn-selengkapnya">Selengkapnya</button></h1>
        </div>

        <!-- Main modal -->
        <div id="#detail{{ $list->thumbnail }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-6 overflow-hidden md:inset-0 h-[calc(100%-1rem)] max-h-full bg-[rgba(0,0,0,0.2)]">
            <div class="relative w-full max-w-2xl max-h-full overflow-y-auto min-h-[200px] scroll-smooth">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-6 ">
                    <!-- Modal header -->
                    <img src="{{ url('public') }}/{{ $list->thumbnail }}" style="height: 250px;width:100%" />
                    <h1 class="text-xl font-medium text-slate-500 text-center mt-5 mb-3">{{ $list->judul }}</h1>
                    <h1 class="text-base text-slate-500">{!! $list->isi !!}</h1>
                   
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="p-8 min-h-screen w-screen bg-amber-300" id="kontak" style="background: #fde68a">
    <div class="flex mb-9 justify-between px-8" style="padding: 0 165px">
        <ul class="">
            <li class="flex items-center mb-2 gap-3">
                <span class="font-medium text-slate-900 text-base mr-6">Instagram</span>
                <span class="font-medium text-xl text-slate-800">@alpha.wedding</span>
            </li>
            <li class="flex items-center mb-2 gap-3">
                <span class="font-medium text-slate-900 text-base mr-6">Whatsapp</span>
                <span class="font-medium text-xl text-slate-800">085787267038</span>
            </li>
            <li class="flex items-center mb-2 gap-3">
                <span class="font-medium text-slate-900 text-base">Email</span>
                <span class="font-medium text-xl text-slate-800 ml-9">alphawedding@gmail.com</span>
            </li>
            <li class="flex items-center mb-2 gap-3">
                <span class="font-medium text-slate-900 text-base">Alamat</span>
                <span class="font-medium text-xl text-slate-800 ml-6">Jl.Brigjend Katamso, Sukaharja, Delta Pawan</span>
            </li>
            
       </ul>
       <ul style="padding: 0 64px">
            <li style="font-weight: 500; font-size: 24px;margin: 0 0 32px 0">Sejarah Singkat</li>
            <li>
                <p style="font-weight: 400; font-size: 18px;">Alpha Wedding Organizer didirikan sejak tahun 2023 oleh Cici Paramitha kelahiran Ketapang, Kalimantan Barat.<br> Kami merupakan jasa organizer pernikahan yang awalnya berfokus pada pernikahan dengan tema adat Melayu, namun sekarang kami pun turut menjamah berbagai maca tema pernikahan adat lainnya seperti pernikahan tradisional khas Palembang, Minang, Aceh, Jawa, Dayak, dan Pernikahan bertema nasional atau modern.</p>
            </li>
       </ul>
    </div>
  
</section>

    <script src="{{ url('public') }}/assets/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
   
    <script>
      feather.replace();

    </script>
     <script>
        // Tambahkan class "scrolled" ke elemen <body> saat halaman di-scroll ke bawah
        window.addEventListener("scroll", function() {
            var element = document.getElementById("navbars");
            var b = document.getElementById("brand");
            if (window.scrollY > 0) {
                element.classList.add("bg-white");
                b.classList.add("text-slate-900");
            } else {
                element.classList.remove("bg-white");
                b.classList.add("text-red-500");
            }
        });
    </script>
  </body>
</html>
