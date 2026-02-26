<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukSU | {{ $title ?? 'Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/assets/icon.png') }}">

    {{-- @vite('resources/css/app.css') --}}

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 5px rgba(99, 102, 241, 0.4);
            }

            50% {
                box-shadow: 0 0 20px rgba(99, 102, 241, 0.8);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease forwards;
        }

        .animate-slide-in {
            animation: slideInLeft 0.4s ease forwards;
        }

        .nav-link {
            transition: all 0.2s ease;
        }

        .nav-link:hover {
            transform: translateX(4px);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .stat-card-gradient-1 {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #6d28d9 100%);
        }

        .stat-card-gradient-2 {
            background: linear-gradient(135deg, #059669 0%, #10b981 50%, #34d399 100%);
        }

        .stat-card-gradient-3 {
            background: linear-gradient(135deg, #ea580c 0%, #f97316 50%, #fb923c 100%);
        }

        .stat-card-gradient-4 {
            background: linear-gradient(135deg, #e11d48 0%, #f43f5e 50%, #fb7185 100%);
        }

        /* Custom scrollbar for dark theme */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        /* Toast Notifications */
        .toast-container {
            position: fixed;
            top: 1.5rem;
            right: 1.5rem;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            pointer-events: none;
        }

        .toast {
            pointer-events: auto;
            min-width: 320px;
            max-width: 420px;
            padding: 1rem 1.25rem;
            border-radius: 1rem;
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            transform: translateX(120%);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .toast.show {
            transform: translateX(0);
            opacity: 1;
        }

        .toast.hide {
            transform: translateX(120%);
            opacity: 0;
        }

        .toast-success {
            background: rgba(16, 185, 129, 0.15);
            border-color: rgba(16, 185, 129, 0.3);
        }

        .toast-error {
            background: rgba(239, 68, 68, 0.15);
            border-color: rgba(239, 68, 68, 0.3);
        }

        .toast-warning {
            background: rgba(245, 158, 11, 0.15);
            border-color: rgba(245, 158, 11, 0.3);
        }

        .toast-info {
            background: rgba(99, 102, 241, 0.15);
            border-color: rgba(99, 102, 241, 0.3);
        }

        .toast-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            border-radius: 0 0 1rem 1rem;
            animation: toastProgress linear forwards;
        }

        .toast-success .toast-progress {
            background: #10b981;
        }

        .toast-error .toast-progress {
            background: #ef4444;
        }

        .toast-warning .toast-progress {
            background: #f59e0b;
        }

        .toast-info .toast-progress {
            background: #6366f1;
        }

        @keyframes toastProgress {
            from {
                width: 100%;
            }

            to {
                width: 0%;
            }
        }
    </style>

    @stack('styles')
</head>

<body class="bg-[#0a0a1a] flex h-screen overflow-hidden font-inter text-white">

    <!-- Sidebard-->
    @include('components.sidebar')

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-y-auto">
        @include('components.header')

        <!-- Page Content -->
        <div class="flex-1 p-6 overflow-y-auto bg-[#0a0a1a]">
            {{ $slot }}
        </div>
    </main>

    <!-- Toast Container -->
    <div id="toastContainer" class="toast-container"></div>

    @stack('scripts')

    <script>
        // Close dropdown on outside click
        document.addEventListener('click', function(e) {
            const dropdown = document.getElementById('notifDropdown');
            const bell = dropdown?.closest('.relative');
            if (bell && !bell.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });

        // --- Toast Notification System ---
        function showToast(message, type = 'success', duration = 4000) {
            const container = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.className = `toast toast-${type}`;

            const icons = {
                success: '<svg class="w-5 h-5 text-emerald-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                error: '<svg class="w-5 h-5 text-red-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                warning: '<svg class="w-5 h-5 text-amber-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>',
                info: '<svg class="w-5 h-5 text-indigo-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
            };

            const colors = {
                success: 'text-emerald-300',
                error: 'text-red-300',
                warning: 'text-amber-300',
                info: 'text-indigo-300'
            };

            toast.innerHTML = `
                ${icons[type] || icons.info}
                <div class="flex-1">
                    <p class="text-sm font-medium ${colors[type] || colors.info}">${message}</p>
                </div>
                <button onclick="dismissToast(this.parentElement)" class="text-gray-500 hover:text-white transition-colors flex-shrink-0 mt-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
                <div class="toast-progress" style="animation-duration: ${duration}ms"></div>
            `;

            container.appendChild(toast);

            // Trigger slide-in
            requestAnimationFrame(() => {
                toast.classList.add('show');
            });

            // Auto-dismiss
            setTimeout(() => dismissToast(toast), duration);
        }

        function dismissToast(toast) {
            if (!toast || toast.classList.contains('hide')) return;
            toast.classList.remove('show');
            toast.classList.add('hide');
            setTimeout(() => toast.remove(), 400);
        }
    </script>

    {{-- Show Laravel session flash messages as toasts --}}
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', () => showToast(@json(session('success')), 'success'));
        </script>
    @endif
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', () => showToast(@json(session('error')), 'error'));
        </script>
    @endif
    @if (session('warning'))
        <script>
            document.addEventListener('DOMContentLoaded', () => showToast(@json(session('warning')), 'warning'));
        </script>
    @endif
    @if (session('info'))
        <script>
            document.addEventListener('DOMContentLoaded', () => showToast(@json(session('info')), 'info'));
        </script>
    @endif
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                @foreach ($errors->all() as $error)
                    showToast(@json($error), 'error', 5000);
                @endforeach
            });
        </script>
    @endif
</body>

</html>
