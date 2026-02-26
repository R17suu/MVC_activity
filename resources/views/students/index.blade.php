<x-layouts.layout title="Student Management" activePage="students">
    <!-- Page Heading -->
    <div class="flex items-center justify-between mb-6 animate-fade-in">
        <div>
            <h1 class="text-2xl font-bold text-white">Student Management</h1>
            <p class="text-gray-400 text-sm mt-1">Manage student records and enrollments</p>
        </div>
        <button onclick="document.getElementById('addStudentModal').classList.remove('hidden')"
            class="flex items-center space-x-2 bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all hover:shadow-lg hover:shadow-indigo-500/30 transform hover:-translate-y-0.5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Add Student</span>
        </button>
    </div>

    <!-- Table Card -->
    <div class="glass-card rounded-2xl p-6 animate-fade-in" style="animation-delay: 0.1s">

        <!-- Search Bar -->
        <div class="mb-5">
            <div class="relative max-w-md">
                <svg class="w-4 h-4 text-gray-500 absolute left-3 top-1/2 -translate-y-1/2" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search by name or LRN..."
                    class="w-full bg-white/5 border border-white/10 rounded-xl pl-10 pr-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-white/10">
                        <th class="text-left py-3 px-4 text-xs font-semibold text-indigo-400 uppercase tracking-wider">
                            LRN</th>
                        <th class="text-left py-3 px-4 text-xs font-semibold text-indigo-400 uppercase tracking-wider">
                            First Name</th>
                        <th class="text-left py-3 px-4 text-xs font-semibold text-indigo-400 uppercase tracking-wider">
                            Middle Name</th>
                        <th class="text-left py-3 px-4 text-xs font-semibold text-indigo-400 uppercase tracking-wider">
                            Last Name</th>
                        <th class="text-left py-3 px-4 text-xs font-semibold text-indigo-400 uppercase tracking-wider">
                            Age</th>
                        <th class="text-left py-3 px-4 text-xs font-semibold text-indigo-400 uppercase tracking-wider">
                            Year Level</th>
                        <th class="text-left py-3 px-4 text-xs font-semibold text-indigo-400 uppercase tracking-wider">
                            Section</th>
                        <th class="text-right py-3 px-4 text-xs font-semibold text-indigo-400 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @foreach ($students as $index => $student)
                        <tr class="hover:bg-white/5 transition-colors group animate-slide-in"
                            style="animation-delay: {{ 0.15 + $index * 0.05 }}s; opacity: 0;">
                            <td class="py-3.5 px-4">
                                <span class="text-gray-400 text-sm font-mono">{{ $student['student_lrn'] }}</span>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="text-white text-sm font-medium">{{ $student['first_name'] }}</span>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="text-white text-sm font-medium">{{ $student['middle_name'] }}</span>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="text-white text-sm font-medium">{{ $student['last_name'] }}</span>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="text-gray-300 text-sm">{{ $student['age'] }}</span>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="text-gray-300 text-sm">{{ $student['year_level'] }}</span>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="text-gray-300 text-sm">{{ $student['section'] }}</span>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="flex items-center justify-end space-x-2">
                                    <!-- Edit Button -->
                                    <button
                                        onclick="openEditModal('{{ $student['lrn'] }}', '{{ $student['first_name'] }}', '{{ $student['middle_name'] }}', '{{ $student['last_name'] }}', '{{ $student['age'] }}', '{{ $student['yearLevel'] }}', '{{ $student['section'] }}')"
                                        class="p-2 rounded-lg bg-indigo-500/10 text-indigo-400 hover:bg-indigo-500/20 hover:text-indigo-300 transition-all"
                                        title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    <!-- Delete Button -->
                                    <button
                                        onclick="openDeleteModal('{{ $student['first_name'] }}', '{{ $student['last_name'] }}')"
                                        class="p-2 rounded-lg bg-red-500/10 text-red-400 hover:bg-red-500/20 hover:text-red-300 transition-all"
                                        title="Delete">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Student Modal -->
    <div id="addStudentModal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"
            onclick="document.getElementById('addStudentModal').classList.add('hidden')"></div>

        <!-- Modal Content -->
        <div
            class="relative bg-[#1a1a2e] border border-white/10 rounded-2xl shadow-2xl w-full max-w-lg mx-4 p-6 animate-fade-in">
            <!-- Close Button -->
            <button onclick="document.getElementById('addStudentModal').classList.add('hidden')"
                class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Header -->
            <h2 class="text-xl font-bold text-white mb-1">Add New Student</h2>
            <p class="text-gray-400 text-sm mb-6">Enter student information to add a new record.</p>

            <!-- Form -->
            <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
                @csrf

                <div class="flex flex-row gap-7">
                    <div>
                        <!-- Student LRN -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Student LRN</label>
                            <input type="text" name="student_lrn" placeholder="e.g. 109820230001"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>

                        <!-- Middle Name -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5"> Middle Name</label>
                            <input type="text" name="middle_name" placeholder="e.g. Protacio"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>

                        <!-- Age -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Age</label>
                            <input type="number" name="age" placeholder="e.g. 16"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>

                        <!-- Section -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Section</label>
                            <input type="text" name="section" placeholder="e.g. STEM-A"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>
                    </div>

                    <div>

                        <!-- First Name -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">First Name</label>
                            <input type="text" name="first_name" placeholder="e.g. Juan"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>

                        <!-- Last Name -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Last Name</label>
                            <input type="text" name="last_name" placeholder="e.g. Dela Cruz"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>


                        <!-- Year Level -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Year Level</label>
                            <input type="text" name="year_level" placeholder="e.g. Level 2"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                            {{-- <select name="year_level"
                        class="w-full bg-[#0f0f23] border border-white/10 rounded-xl px-4 py-2.5 text-sm text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all appearance-none"
                        style="background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E\"); background-repeat: no-repeat; background-position: right 12px center; background-size: 16px;">
                        <option value="" disabled selected>Select year level</option>
                        <option value="Grade 11">Grade 11</option>
                        <option value="Grade 12">Grade 12</option>
                    </select> --}}
                        </div>

                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex items-center justify-end space-x-3 pt-2">
                    <button type="button"
                        onclick="document.getElementById('addStudentModal').classList.add('hidden')"
                        class="px-5 py-2.5 rounded-xl text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl text-sm font-semibold transition-all hover:shadow-lg hover:shadow-indigo-500/30">
                        Add Student
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Student Modal -->
    <div id="editStudentModal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"
            onclick="document.getElementById('editStudentModal').classList.add('hidden')"></div>

        <!-- Modal Content -->
        <div
            class="relative bg-[#1a1a2e] border border-white/10 rounded-2xl shadow-2xl w-full max-w-lg mx-4 p-6 animate-fade-in">
            <!-- Close Button -->
            <button onclick="document.getElementById('editStudentModal').classList.add('hidden')"
                class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Header -->
            <h2 class="text-xl font-bold text-white mb-1">Edit Student</h2>
            <p class="text-gray-400 text-sm mb-6">Update student information below.</p>

            <!-- Form -->
            <form action="#" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div class="flex flex-row gap-7">
                    <div>
                        <!-- Student LRN -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Student LRN</label>
                            <input type="text" name="lrn" id="edit_lrn"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>

                        <!-- Name -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Middle Name</label>
                            <input type="text" name="name" id="edit_middle_name"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>

                        <!-- Age -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Age</label>
                            <input type="number" name="age" id="edit_age"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>

                        <!-- Year Level -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Year Level</label>
                            <input type="text" name="year_level" id="edit_year_level"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                            {{-- <select name="year_level" id="edit_year_level"
                        class="w-full bg-[#0f0f23] border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all appearance-none"
                        style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E&quot;); background-repeat: no-repeat; background-position: right 12px center; background-size: 16px;">
                        <option value="Grade 11">Grade 11</option>
                        <option value="Grade 12">Grade 12</option>
                    </select> --}}
                        </div>
                    </div>


                    <div>
                        <!-- Name -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">First Name</label>
                            <input type="text" name="name" id="edit_first_name"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>

                        <!-- Name -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Last Name</label>
                            <input type="text" name="name" id="edit_last_name"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>

                        <!-- Section -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Section</label>
                            <input type="text" name="section" id="edit_section"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all">
                        </div>
                    </div>


                </div>

                <!-- Buttons -->
                <div class="flex items-center justify-end space-x-3 pt-2">
                    <button type="button"
                        onclick="document.getElementById('editStudentModal').classList.add('hidden')"
                        class="px-5 py-2.5 rounded-xl text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl text-sm font-semibold transition-all hover:shadow-lg hover:shadow-indigo-500/30">
                        Update Student
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteConfirmModal" class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"
            onclick="document.getElementById('deleteConfirmModal').classList.add('hidden')"></div>
        <div
            class="relative bg-[#1a1a2e] border border-white/10 rounded-2xl shadow-2xl w-full max-w-sm mx-4 p-6 animate-fade-in">
            <div class="text-center">
                <div class="w-14 h-14 bg-red-500/15 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-1">Delete Student</h3>
                <p class="text-gray-400 text-sm mb-6">Are you sure you want to delete <span id="deleteStudentName"
                        class="text-white font-medium"></span>? This action cannot be undone.</p>
                <div class="flex items-center justify-center space-x-3">
                    <button onclick="document.getElementById('deleteConfirmModal').classList.add('hidden')"
                        class="px-5 py-2.5 rounded-xl text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">
                        Cancel
                    </button>
                    <button onclick="confirmDelete()"
                        class="px-5 py-2.5 bg-red-600 hover:bg-red-700 text-white rounded-xl text-sm font-semibold transition-all hover:shadow-lg hover:shadow-red-500/30">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let deleteTargetName = '';

        // --- Open Edit Modal ---
        function openEditModal(lrn, first_name, middle_name, last_name, age, yearLevel, section) {
            document.getElementById('edit_lrn').value = lrn;
            document.getElementById('edit_first_name').value = first_name;
            document.getElementById('edit_middle_name').value = middle_name;
            document.getElementById('edit_last_name').value = last_name;
            document.getElementById('edit_age').value = age;
            document.getElementById('edit_year_level').value = yearLevel;
            document.getElementById('edit_section').value = section;
            document.getElementById('editStudentModal').classList.remove('hidden');
            showToast('Editing student: ' + first_name + ' ' + last_name, 'info');
        }

        // --- Delete Confirmation ---
        function openDeleteModal(firstName, lastName) {
            deleteTargetName = firstName + ' ' + lastName;
            document.getElementById('deleteStudentName').textContent = deleteTargetName;
            document.getElementById('deleteConfirmModal').classList.remove('hidden');
        }

        function confirmDelete() {
            document.getElementById('deleteConfirmModal').classList.add('hidden');
            showToast('Student "' + deleteTargetName + '" has been deleted successfully.', 'success');
            // TODO: Add actual delete logic (e.g., form submission or AJAX call)
        }
    </script>

</x-layouts.layout>
