<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INDEX</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url('public') }}/assets/config/tailwind.css" />
   
    
  </head>
  <body class="bg-slate-50">
   
    @include('admin.tempelate.navbar')
    @include('admin.tempelate.sidebar')

    <section class="content">
        <div class="p-4 dark:border-gray-700 mt-14">
            @yield('content')
        </div>
    </section>
	@foreach (['success', 'danger', 'warning', 'info'] as $status)
    @if (session($status))
        @if ($status == 'success')
		<div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed top-12 right-10" role="alert">
			<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
			  <i data-feather="check-circle" class="w-[18px]"></i>
			</div>
			<div class="ml-3 text-sm font-normal">{{ session($status) }}</div>
			<button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
			  <i data-feather="x" class="w-[18px]"></i>
			</button>
		  </div>
            @else
            <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed top-12 right-10" role="alert">
				<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-green-200">
				  <i data-feather="alert-circle" class="w-[18px]"></i>
				</div>
				<div class="ml-3 text-sm font-normal">{{ session($status) }}</div>
				<button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
				  <i data-feather="x" class="w-[18px]"></i>
				</button>
			  </div>
        @endif
    
    @endif
@endforeach
    




    <script src="{{ url('public') }}/assets/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
