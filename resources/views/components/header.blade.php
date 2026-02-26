<!-- Header -->
<header class="bg-[#0f0f23] h-16 flex items-center justify-between px-8 border-b border-white/5">
    <div class="flex-1 max-w-md">
        <div class="relative">
            <svg class="w-4 h-4 text-gray-500 absolute left-3 top-1/2 -translate-y-1/2" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search students, classes..."
                class="w-full bg-white/5 border border-white/10 rounded-xl pl-10 pr-4 py-2 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
        </div>
    </div>
    <div class="flex items-center space-x-4">
        <!-- Notification Bell -->
        <div class="relative">
            <button onclick="document.getElementById('notifDropdown').classList.toggle('hidden')"
                class="relative p-2 text-gray-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-indigo-500 rounded-full animate-pulse"></span>
            </button>

            <!-- Notification Dropdown -->
            <div id="notifDropdown"
                class="hidden absolute right-0 top-full mt-2 w-80 bg-[#1a1a2e] border border-white/10 rounded-2xl shadow-2xl z-50 overflow-hidden">
                <!-- Header -->
                <div class="flex items-center justify-between px-4 py-3 border-b border-white/5">
                    <h3 class="text-sm font-bold text-white">Notifications</h3>
                    <button class="text-xs text-indigo-400 hover:text-indigo-300 transition-colors">Mark all
                        read</button>
                </div>

                <!-- Notification Items -->
                <div class="max-h-72 overflow-y-auto custom-scrollbar">
                    <!-- Unread -->
                    <div
                        class="px-4 py-3 hover:bg-white/5 transition-colors border-l-2 border-indigo-500 cursor-pointer">
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-indigo-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-white font-medium">New enrollment request</p>
                                <p class="text-xs text-gray-400 mt-0.5">Maria Santos submitted an enrollment
                                    form</p>
                                <p class="text-xs text-gray-500 mt-1">2 minutes ago</p>
                            </div>
                        </div>
                    </div>

                    <!-- Unread -->
                    <div
                        class="px-4 py-3 hover:bg-white/5 transition-colors border-l-2 border-indigo-500 cursor-pointer">
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-white font-medium">Grades submitted</p>
                                <p class="text-xs text-gray-400 mt-0.5">Grade 11 STEM-A midterm grades are
                                    ready</p>
                                <p class="text-xs text-gray-500 mt-1">15 minutes ago</p>
                            </div>
                        </div>
                    </div>

                    <!-- Read -->
                    <div
                        class="px-4 py-3 hover:bg-white/5 transition-colors border-l-2 border-transparent cursor-pointer opacity-60">
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-amber-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-white font-medium">System maintenance</p>
                                <p class="text-xs text-gray-400 mt-0.5">Scheduled downtime on Feb 28, 2:00 AM
                                </p>
                                <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                            </div>
                        </div>
                    </div>

                    <!-- Read -->
                    <div
                        class="px-4 py-3 hover:bg-white/5 transition-colors border-l-2 border-transparent cursor-pointer opacity-60">
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-purple-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-white font-medium">New student registered</p>
                                <p class="text-xs text-gray-400 mt-0.5">Juan Dela Cruz was added to Grade 12
                                    ABM-B</p>
                                <p class="text-xs text-gray-500 mt-1">3 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="px-4 py-3 border-t border-white/5 text-center">
                    <a href="#"
                        class="text-xs text-indigo-400 hover:text-indigo-300 font-medium transition-colors">View
                        All Notifications</a>
                </div>
            </div>
        </div>
        <a href="/ma/profile" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
            <div class="text-right">
                <span class="font-semibold text-white block text-sm">Administrator</span>
                <span class="text-xs text-gray-400">admin@buksu.edu.ph</span>
            </div>
            <div
                class="w-9 h-9 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full shadow-lg flex items-center justify-center">
                <span class="text-white font-bold text-sm">A</span>
            </div>
        </a>
    </div>
</header>
