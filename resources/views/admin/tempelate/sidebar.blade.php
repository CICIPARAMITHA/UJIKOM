<aside id="logo-sidebar" class="sidebar" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
        <li>
          <a
            href="{{ url('admin/dashboard') }}"
            class="flex px-2 py-3 items-center text-gray-900 rounded-lg hover:bg-gradient-to-r hover:from-blue-700 hover:via-blue-600 hover:to-blue-600  hover:shadow-lg dark:hover:bg-gray-700 group {{ request()->is('admin/dashboard*') ? 'bg-gradient-to-r from-blue-700 via-blue-600 to-blue-600 text-white shadow-lg' : '' }}"
          >
            <i data-feather="home" class="w-[18px] h-[18px]"></i>
            <span class="ml-3 text-sm">Dashboard</span>
          </a>
        </li>
        <li>
          <a
            href="{{ url('admin/paket') }}"
            class="flex px-2 py-3 items-center text-gray-900 rounded-lg hover:bg-gradient-to-r hover:from-blue-700 hover:via-blue-600 hover:to-blue-600  hover:shadow-lg dark:hover:bg-gray-700 group {{ request()->is('admin/paket*') ? 'bg-gradient-to-r from-blue-700 via-blue-600 to-blue-600 text-white shadow-lg' : '' }}"
          >
            <i data-feather="archive" class="w-[18px] h-[18px]"></i>
            <span class="ml-3 text-sm">Paket</span>
          </a>
        </li>
        <li>
          <a
            href="{{ url('admin/artikel') }}"
            class="flex px-2 py-3 items-center text-gray-900 rounded-lg hover:bg-gradient-to-r hover:from-blue-700 hover:via-blue-600 hover:to-blue-600  hover:shadow-lg dark:hover:bg-gray-700 group {{ request()->is('admin/artikel*') ? 'bg-gradient-to-r from-blue-700 via-blue-600 to-blue-600 text-white shadow-lg' : '' }}"
          >
            <i data-feather="columns" class="w-[18px] h-[18px]"></i>
            <span class="ml-3 text-sm">Artikel</span>
          </a>
        </li>
        <li>
          <a
            href="{{ url('admin/event') }}"
            class="flex px-2 py-3 items-center text-gray-900 rounded-lg hover:bg-gradient-to-r hover:from-blue-700 hover:via-blue-600 hover:to-blue-600  hover:shadow-lg dark:hover:bg-gray-700 group {{ request()->is('admin/event*') ? 'bg-gradient-to-r from-blue-700 via-blue-600 to-blue-600 text-white shadow-lg' : '' }}"
          >
            <i data-feather="calendar" class="w-[18px] h-[18px]"></i>
            <span class="ml-3 text-sm">Event</span>
          </a>
        </li>
        <li>
          <a
            href="{{ url('admin/galeri') }}"
            class="flex px-2 py-3 items-center text-gray-900 rounded-lg hover:bg-gradient-to-r hover:from-blue-700 hover:via-blue-600 hover:to-blue-600  hover:shadow-lg dark:hover:bg-gray-700 group {{ request()->is('admin/galeri*') ? 'bg-gradient-to-r from-blue-700 via-blue-600 to-blue-600 text-white shadow-lg' : '' }}"
          >
            <i data-feather="image" class="w-[18px] h-[18px]"></i>
            <span class="ml-3 text-sm">Galeri</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>