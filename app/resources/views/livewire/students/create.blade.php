<div x-data="{ Open: false }">

        <button type="button"
            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 flex items-center gap-2"
            x-on:click="Open = true">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            {{ trans('general.buttons.create') }}
        </button>


    {{-- Overlay + Modal --}}
    <div
        x-show="Open"
        x-transition
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50">

        {{-- Backdrop click --}}
        <div class="absolute inset-0" x-on:click="Open = false"></div>

        {{-- Modal Box --}}
        <div
            x-show="Open"
            x-transition
            class="relative w-full max-w-5xl max-h-[90vh] overflow-y-auto bg-white rounded-2xl shadow-xl z-10"
            dir="rtl">

            {{-- Header --}}
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100 sticky top-0 bg-white z-10">
                <h3 class="text-lg font-semibold text-gray-800">{{ trans('general.new') }}</h3>
                <button type="button"
                    class="p-1.5 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors"
                    x-on:click="Open = false">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form wire:submit.prevent="store">
                <div class="p-6">

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                            <ul class="list-disc list-inside text-sm text-red-600 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Success Alert --}}
                    @if (session()->has('success'))
                        <div x-data="{ show: true }" x-show="show"
                            class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg flex items-center justify-between">
                            <span class="text-sm text-green-600">{{ session('success') }}</span>
                            <button type="button" x-on:click="show = false; Open = false"
                                class="text-green-500 hover:text-green-700">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    @endif

                    {{-- Error Alert --}}
                    @if (session()->has('error'))
                        <div x-data="{ show: true }" x-show="show"
                            class="mb-4 p-4 bg-red-50 border border-red-200 rounded-lg flex items-center justify-between">
                            <span class="text-sm text-red-600">{{ session('error') }}</span>
                            <button type="button" x-on:click="show = false"
                                class="text-red-500 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        {{-- Left: Personal Info --}}
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <div class="px-4 py-3 border-b border-gray-100 bg-gray-50">
                                <h5 class="text-sm font-semibold text-blue-600 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    {{ trans('student.student_info') }}
                                </h5>
                            </div>
                            <div class="p-4 space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                {{-- Student Name --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.name') }}</label>
                                    <input type="text" wire:model="student_name" id="student_name"
                                        class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 @error('student_name') border-red-400 bg-red-50 @else border-gray-300 @enderror">
                                    @error('student_name')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- Parent --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        {{ trans('Parents.father-name') }}
                                    </label>
                                    <input list="parents_list" type="text" wire:model="parent_name_input" id="parent_name_input"
                                        placeholder="{{ trans('general.choose', ['value' => trans('Parents.father-name')]) }}"
                                        class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 @error('parent_name_input') border-red-400 bg-red-50 @else border-gray-300 @enderror">
                                    <datalist id="parents_list">
                                        @foreach ($this->parents as $parent)
                                            <option value="{{ $parent->Father_Name }}" />
                                        @endforeach
                                    </datalist>
                                    @error('parent_name_input')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                                {{-- Birth Date + Age --}}
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.birth_date') }}</label>
                                        <input type="date" wire:model.live="birth_date" id="birth_date"
                                            class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 @error('birth_date') border-red-400 bg-red-50 @else border-gray-300 @enderror">
                                        @error('birth_date')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="grid grid-cols-3 gap-1">
                                        <div>
                                            <label class="block text-xs font-medium text-gray-500 mb-1">{{ trans('student.year') }}</label>
                                            <input type="text" wire:model="year" disabled
                                                class="w-full px-2 py-2 border border-gray-200 bg-gray-100 rounded-lg text-sm text-center text-gray-600">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-medium text-gray-500 mb-1">{{ trans('student.month') }}</label>
                                            <input type="text" wire:model="month" disabled
                                                class="w-full px-2 py-2 border border-gray-200 bg-gray-100 rounded-lg text-sm text-center text-gray-600">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-medium text-gray-500 mb-1">{{ trans('student.day') }}</label>
                                            <input type="text" wire:model="day" disabled
                                                class="w-full px-2 py-2 border border-gray-200 bg-gray-100 rounded-lg text-sm text-center text-gray-600">
                                        </div>
                                    </div>
                                </div>

                                {{-- National ID + Nationality --}}
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.national_id') }}</label>
                                        <input type="text" wire:model="national_id" id="national_id"
                                            minlength="14" maxlength="14"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                            class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 @error('national_id') border-red-400 bg-red-50 @else border-gray-300 @enderror">
                                        @error('national_id')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <x-input.nationality wire:model="nationality" class="ignore" />
                                    </div>
                                </div>

                                {{-- Gender / Status / Religion --}}
                                <div class="grid grid-cols-3 gap-3">
                                    <x-input.gender-select wire:model="gender" class="ignore" />
                                    {{-- <x-input.Student_Status wire:model="std_status" class="ignore" /> --}}
                                    <x-input.religion-select wire:model="religion" class="ignore" />
                                </div>

                                {{-- Address --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.address') }}</label>
                                    <textarea wire:model="address" id="address" rows="3"
                                        class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 @error('address') border-red-400 bg-red-50 @else border-gray-300 @enderror"></textarea>
                                    @error('address')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    <div>
                        {{-- Right: Study Info --}}
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <div class="px-4 py-3 border-b border-gray-100 bg-gray-50">
                                <h5 class="text-sm font-semibold text-green-600 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    {{ trans('student.study_info') }}
                                </h5>
                            </div>
                            <div class="p-4 space-y-4">

                                {{-- Grade --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        {{ trans('general.choose', ['value' => trans('Grades.name')]) }}
                                    </label>
                                    <select wire:model.live="grade" id="grades"
                                        class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 @error('grade') border-red-400 bg-red-50 @else border-gray-300 @enderror">
                                        <option value="">{{ trans('general.choose', ['value' => trans('Grades.name')]) }}</option>
                                        @foreach ($grades as $grade_item)
                                            <option value="{{ $grade_item->id }}">{{ $grade_item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('grade')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Classroom --}}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        {{ trans('general.choose', ['value' => trans('class_rooms.name')]) }}
                                    </label>
                                    <select wire:model.live="classroom" id="classrooms"
                                        @if(count($this->newClassrooms) == 0) disabled @endif
                                        class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 disabled:bg-gray-100 disabled:text-gray-400 disabled:cursor-not-allowed @error('classroom') border-red-400 bg-red-50 @else border-gray-300 @enderror">
                                        <option value="">{{ trans('general.choose', ['value' => trans('class_rooms.name')]) }}</option>
                                        @foreach ($this->newClassrooms as $classroom_item)
                                            <option value="{{ $classroom_item->id }}">{{ $classroom_item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('classroom')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>



                            </div>
                        </div>

                       <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <div class="px-4 py-3 border-b border-gray-100 bg-gray-50">
                                <h5 class="text-sm font-semibold text-green-600 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    {{ trans('Sidebar.schoolfees') }}
                                </h5>
                            </div>
                            <div class="p-4 space-y-4">

                            <table class="w-full text-sm text-left text-gray-600">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-2 font-medium text-gray">{{ trans('fees.title') }}</th>
                                        <th class="px-4 py-2 font-medium text-gray">{{ trans('fees.amount') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($fees as $fee)
                                        <tr>
                                            <td class="px-4 py-2">{{ $fee->title }}</td>
                                            <td class="px-4 py-2">{{ number_format($fee->amount, 2) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="px-4 py-2 text-center text-gray-400">
                                                {{ trans('fees.no_fees_found') }}
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>



                            </div>
                             <div class="p-4 space-y-4">

                            <table class="w-full text-sm text-left text-gray-600">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-2 font-medium text-gray">{{ trans('clothes.title') }}</th>
                                        <th class="px-4 py-2 font-medium text-gray">{{ trans('clothes.amount') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($clothes as $clothe)
                                        <tr>
                                            <td class="px-4 py-2">{{ $clothe->title }}</td>
                                            <td class="px-4 py-2">{{ number_format($clothe->amount, 2) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="px-4 py-2 text-center text-gray-400">
                                                {{ trans('fees.no_fees_found') }}
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>



                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                {{-- Footer --}}
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 sticky bottom-0">
                    <button type="button"
                        class="px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-xl hover:bg-gray-100 transition-colors"
                        x-on:click="Open = false">
                        {{ trans('general.close') }}
                    </button>
                    <button type="submit"
                        wire:loading.attr="disabled"
                        class="px-5 py-2 bg-blue-500 text-white text-sm font-medium rounded-xl hover:bg-blue-600 transition-colors flex items-center gap-2 disabled:opacity-60 disabled:cursor-not-allowed">
                        <span wire:loading.remove>{{ trans('general.Submit') }}</span>
                        <span wire:loading class="flex items-center gap-2">
                            <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
                            </svg>
                            {{ trans('general.loading') }}
                        </span>
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>
