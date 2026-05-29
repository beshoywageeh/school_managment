<div>
@can('students-create')
@include('livewire.students.create')
@endcan
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-6">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-4">
                <div class="md:col-span-3">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.search') }}</label>
                    <input type="text" wire:model.live.debounce.300ms="search"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                        placeholder="{{ trans('student.search_placeholder') }}">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Grades.name') }}</label>
                    <select wire:model.live="grade_id"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                        <option value="">{{ trans('student.all_grades') }}</option>
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('class_rooms.name') }}</label>
                    <select wire:model.live="classroom_id"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                        @if (!$this->classrooms->count()) disabled @endif>
                        <option value="">{{ trans('student.all_classrooms') }}</option>
                        @foreach ($this->classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.birth_date') }}</label>
                    <input type="date" wire:model.live="birth_date_filter"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.join_date_to') }}</label>
                    <input type="date" wire:model.live="joinDateTo"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                </div>
                <div class="md:col-span-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.per_page') }}</label>
                    <select wire:model.live="perPage"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <div class="text-sm text-gray-500">
                    {{ trans('general.total') }}: <span class="font-semibold text-gray-700">{{ $students->total() }}</span>
                </div>
                @include('livewire.students.create')
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase w-12">#</th>
                        <th wire:click="sortBy('students.name')"
                            class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase cursor-pointer hover:text-blue-600">
                            <div class="flex items-center gap-1">
                                {{ trans('student.name') }}
                                @if ($sortField === 'students.name')
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        @if ($sortDirection === 'asc')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        @else
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        @endif
                                    </svg>
                                @endif
                            </div>
                        </th>
                        <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            {{ trans('student.parent_header') }}
                        </th>
                        <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            {{ trans('Grades.name') }}
                        </th>
                        <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            {{ trans('class_rooms.name') }}
                        </th>
                        <th wire:click="sortBy('students.birth_date')"
                            class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase cursor-pointer hover:text-blue-600">
                            <div class="flex items-center gap-1">
                                {{ trans('student.birth_date') }}
                                @if ($sortField === 'students.birth_date')
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        @if ($sortDirection === 'asc')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                        @else
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        @endif
                                    </svg>
                                @endif
                            </div>
                        </th>
                        <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            {{ trans('student.gender') }}
                        </th>
                        <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            {{ trans('student.status') }}
                        </th>
                        <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">
                            {{ trans('general.actions') }}
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($students as $student)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3 text-center text-gray-500">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-4 py-3">
                                <a href="{{ route('students.show', $student->id) }}"
                                    class="text-blue-600 hover:text-blue-800 font-medium">
                                    {{ $student->name }}
                                </a>
                            </td>
                            <td class="px-4 py-3 text-gray-600">
                                {{ $student->parent_name }}
                            </td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">
                                    {{ $student->grade_name }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-gray-600">
                                {{ $student->classroom_name }}
                            </td>
                            <td class="px-4 py-3 text-gray-600 whitespace-nowrap">
                                {{ $student->birth_date }}
                            </td>
                            <td class="px-4 py-3">
                                @php
                                    $genderColor = $student->gender?->value === 0 ? 'bg-blue-50 text-blue-700' : 'bg-pink-50 text-pink-700';
                                @endphp
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $genderColor }}">
                                    {{ $student->gender?->lang() }}
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-700">
                                    {{ $student->student_status?->lang() }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <x-student-table-action :id="$student->id" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="px-4 py-12 text-center text-gray-400">
                                <div class="flex flex-col items-center gap-2">
                                    <svg class="w-10 h-10 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>{{ trans('student.no_students_found') }}</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $students->links() }}
    </div>
</div>
