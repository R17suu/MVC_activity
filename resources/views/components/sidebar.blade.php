 <!-- Sidebar -->
 <aside class="w-64 bg-[#0f0f23] flex flex-col border-r border-white/5">
     <!-- Logo Section -->
     <div class="p-6 flex items-center space-x-3 border-b border-white/5">
         <div
             class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex-shrink-0 flex items-center justify-center shadow-lg">
             <span class="text-white font-bold text-sm">BU</span>
         </div>
         <div>
             <h1 class="text-sm font-bold text-white leading-tight">BukSU</h1>
             <p class="text-[10px] text-gray-400 uppercase tracking-wider">School Management</p>
         </div>
     </div>

     <!-- Navigation -->
     <nav class="flex-1 px-4 space-y-1 mt-6">
         @php
             $currentPage = $activePage ?? 'dashboard';
             $navItems = [
                 [
                     'label' => 'Dashboard',
                     'key' => 'dashboard',
                     'href' => '/ma/dashboard',
                     'icon' =>
                         'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                 ],
                 [
                     'label' => 'Student Management',
                     'key' => 'students',
                     'href' => '/ma/students',
                     'icon' =>
                         'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                 ],
                 [
                     'label' => 'Settings',
                     'key' => 'settings',
                     'href' => '/ma/settings',
                     'icon' => [
                         'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
                         'M15 12a3 3 0 11-6 0 3 3 0 016 0z',
                     ],
                 ],
             ];
         @endphp

         @foreach ($navItems as $item)
             <a href="{{ $item['href'] }}"
                 class="nav-link flex items-center space-x-3 p-3 rounded-xl transition-all {{ $currentPage === $item['key'] ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-500/30 font-semibold' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                 <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     @if (is_array($item['icon']))
                         @foreach ($item['icon'] as $path)
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="{{ $path }}" />
                         @endforeach
                     @else
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="{{ $item['icon'] }}" />
                     @endif
                 </svg>
                 <span class="font-medium text-sm">{{ $item['label'] }}</span>
             </a>
         @endforeach
     </nav>

     <!-- Logout -->
     <div class="p-4 border-t border-white/5">
         <form action="#" method="POST"
             class="nav-link flex items-center text-gray-400 hover:text-red-400 hover:bg-red-500/10 p-3 rounded-xl transition-all">
             @csrf
             <button type="submit" class="w-full flex items-center space-x-3">
                 <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                 </svg>
                 <span class="font-medium text-sm">Logout</span>
             </button>
         </form>
     </div>
 </aside>
