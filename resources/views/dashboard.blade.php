<x-layouts.layout title="Dashboard" activePage="dashboard">

    <!-- Page Heading -->
    <div class="mb-6 animate-fade-in">
        <h1 class="text-2xl font-bold text-white">Dashboard Overview</h1>
        <p class="text-gray-400 text-sm mt-1">Welcome back! Here's what's happening today.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Total Students -->
        <div class="stat-card-gradient-1 rounded-2xl p-5 card-hover animate-fade-in relative overflow-hidden">
            <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2">
            </div>
            <div class="flex items-start justify-between relative z-10">
                <div>
                    <p class="text-white/70 text-xs font-medium mb-1">Total Students</p>
                    <h3 class="text-3xl font-bold text-white">1,248</h3>
                    <p class="text-emerald-300 text-xs font-medium mt-2 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        +12% from last month
                    </p>
                </div>
                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Active Classes -->
        <div class="stat-card-gradient-2 rounded-2xl p-5 card-hover animate-fade-in relative overflow-hidden"
            style="animation-delay: 0.1s">
            <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2">
            </div>
            <div class="flex items-start justify-between relative z-10">
                <div>
                    <p class="text-white/70 text-xs font-medium mb-1">Active Classes</p>
                    <h3 class="text-3xl font-bold text-white">42</h3>
                    <p class="text-white/60 text-xs font-medium mt-2">8 new this semester</p>
                </div>
                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Pending Enrollments -->
        <div class="stat-card-gradient-3 rounded-2xl p-5 card-hover animate-fade-in relative overflow-hidden"
            style="animation-delay: 0.2s">
            <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2">
            </div>
            <div class="flex items-start justify-between relative z-10">
                <div>
                    <p class="text-white/70 text-xs font-medium mb-1">Pending Enrollments</p>
                    <h3 class="text-3xl font-bold text-white">23</h3>
                    <p class="text-white/60 text-xs font-medium mt-2">Awaiting approval</p>
                </div>
                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Faculty Count -->
        <div class="stat-card-gradient-4 rounded-2xl p-5 card-hover animate-fade-in relative overflow-hidden"
            style="animation-delay: 0.3s">
            <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2">
            </div>
            <div class="flex items-start justify-between relative z-10">
                <div>
                    <p class="text-white/70 text-xs font-medium mb-1">Faculty Count</p>
                    <h3 class="text-3xl font-bold text-white">87</h3>
                    <p class="text-emerald-300 text-xs font-medium mt-2 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        +3 new hires
                    </p>
                </div>
                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Grid: Recent Activity + Quick Stats -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 animate-fade-in" style="animation-delay: 0.4s">

        <!-- Recent Activity -->
        <div class="lg:col-span-2 glass-card rounded-2xl p-6">
            <div class="flex items-center justify-between mb-5">
                <h2 class="text-lg font-bold text-white">Recent Activity</h2>
                <a href="#"
                    class="text-indigo-400 hover:text-indigo-300 text-sm font-medium transition-colors">View All</a>
            </div>

            <div class="space-y-3">
                @php
                    $activities = [
                        [
                            'name' => 'Juan Dela Cruz',
                            'action' => 'Enrolled in Grade 11 - STEM',
                            'lrn' => 'LRN: 109820230001',
                            'time' => '2 minutes ago',
                            'color' => 'from-indigo-500 to-purple-500',
                            'initials' => 'JD',
                        ],
                        [
                            'name' => 'Maria Santos',
                            'action' => 'Enrolled in Grade 12 - ABM',
                            'lrn' => 'LRN: 109820230002',
                            'time' => '15 minutes ago',
                            'color' => 'from-pink-500 to-rose-500',
                            'initials' => 'MS',
                        ],
                        [
                            'name' => 'Pedro Reyes',
                            'action' => 'Enrolled in Grade 11 - HUMSS',
                            'lrn' => 'LRN: 109820230003',
                            'time' => '1 hour ago',
                            'color' => 'from-amber-500 to-orange-500',
                            'initials' => 'PR',
                        ],
                        [
                            'name' => 'Ana Garcia',
                            'action' => 'Enrolled in Grade 12 - GAS',
                            'lrn' => 'LRN: 109820230004',
                            'time' => '2 hours ago',
                            'color' => 'from-emerald-500 to-teal-500',
                            'initials' => 'AG',
                        ],
                        [
                            'name' => 'Jose Fernandez',
                            'action' => 'Enrolled in Grade 11 - TVL',
                            'lrn' => 'LRN: 109820230005',
                            'time' => '3 hours ago',
                            'color' => 'from-cyan-500 to-blue-500',
                            'initials' => 'JF',
                        ],
                    ];
                @endphp

                @foreach ($activities as $index => $activity)
                    <div class="flex items-center justify-between p-3 rounded-xl hover:bg-white/5 transition-all group animate-slide-in"
                        style="animation-delay: {{ 0.5 + $index * 0.1 }}s; opacity: 0;">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-10 h-10 bg-gradient-to-br {{ $activity['color'] }} rounded-full flex items-center justify-center shadow-lg flex-shrink-0">
                                <span class="text-white font-bold text-xs">{{ $activity['initials'] }}</span>
                            </div>
                            <div>
                                <p class="font-semibold text-white text-sm">{{ $activity['name'] }}</p>
                                <p class="text-gray-400 text-xs">{{ $activity['action'] }}</p>
                                <p class="text-gray-500 text-[10px] mt-0.5">{{ $activity['lrn'] }}</p>
                            </div>
                        </div>
                        <span class="text-gray-500 text-xs whitespace-nowrap">{{ $activity['time'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="glass-card rounded-2xl p-6">
            <h2 class="text-lg font-bold text-white mb-5">Quick Stats</h2>

            <!-- Academic Year -->
            <div class="mb-6">
                <div class="flex items-center space-x-3 mb-1">
                    <div class="w-8 h-8 bg-indigo-500/20 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-400 text-xs">Academic Year</p>
                        <p class="text-white font-bold text-lg">2025-2026</p>
                    </div>
                </div>
            </div>

            <!-- Enrollment Progress -->
            <div class="mb-6">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-gray-400 text-xs font-medium">Enrollment Progress</p>
                    <span class="text-indigo-400 text-xs font-semibold">76%</span>
                </div>
                <div class="w-full bg-white/10 rounded-full h-2.5">
                    <div class="bg-gradient-to-r from-indigo-500 to-blue-500 h-2.5 rounded-full transition-all duration-1000"
                        style="width: 76%"></div>
                </div>
                <p class="text-gray-500 text-[10px] mt-1.5">76% completed</p>
            </div>

            <!-- Divider -->
            <div class="border-t border-white/5 my-4"></div>

            <!-- Grade Levels -->
            <div>
                <p class="text-gray-400 text-xs font-medium mb-3">Grade Levels</p>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                            <span class="text-gray-300 text-sm">Grade 11</span>
                        </div>
                        <span class="text-white font-bold text-sm">624</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                            <span class="text-gray-300 text-sm">Grade 12</span>
                        </div>
                        <span class="text-white font-bold text-sm">624</span>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-white/5 my-4"></div>

            <!-- Gender Distribution -->
            <div>
                <p class="text-gray-400 text-xs font-medium mb-3">Gender Distribution</p>
                <div class="flex space-x-2">
                    <div class="flex-1 bg-indigo-500/20 rounded-xl p-3 text-center">
                        <p class="text-indigo-400 text-lg font-bold">52%</p>
                        <p class="text-gray-400 text-[10px]">Male</p>
                    </div>
                    <div class="flex-1 bg-pink-500/20 rounded-xl p-3 text-center">
                        <p class="text-pink-400 text-lg font-bold">48%</p>
                        <p class="text-gray-400 text-[10px]">Female</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.layout>
