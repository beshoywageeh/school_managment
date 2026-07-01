<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-4 border-b border-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">{{ trans('schedules.title') }}</h3>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('schedules.day') }}</label>
                <select wire:model.live="selectedDay" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                    <option value="">{{ trans('schedules.select_day') }}</option>
                    <option value="saturday">{{ trans('schedules.saturday') }}</option>
                    <option value="sunday">{{ trans('schedules.sunday') }}</option>
                    <option value="monday">{{ trans('schedules.monday') }}</option>
                    <option value="tuesday">{{ trans('schedules.tuesday') }}</option>
                    <option value="wednesday">{{ trans('schedules.wednesday') }}</option>
                    <option value="thursday">{{ trans('schedules.thursday') }}</option>
                </select>
            </div>
            <div class="flex flex-wrap gap-2 items-start">
                <button class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 text-sm" wire:click="$emit('print')">
                    <i class="ti ti-print"></i> {{ trans('schedules.print') }}
                </button>
                <button class="px-3 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 text-sm" wire:click="autoGenerate">
                    <i class="ti ti-settings"></i> {{ trans('schedules.auto_generate') }}
                </button>
                <button class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 text-sm" wire:click="clearSchedule" onclick="confirm('{{ trans('schedules.clear_confirm') }}') || event.stopImmediatePropagation()">
                    <i class="ti ti-trash"></i> {{ trans('schedules.clear_schedule') }}
                </button>
            </div>
        </div>
    </div>
    <div class="p-6">
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead>
                    <tr>
                        <td colspan="9" class="bg-gray-50 px-4 py-2">
                            <h5 class="text-gray-800 font-semibold">{{ trans('schedules.' . $selectedDay) }}</h5>
                        </td>
                    </tr>
                    <tr class="bg-blue-50 font-semibold">
                        <th class="px-4 py-2 text-center text-gray-700">{{ trans('schedules.teacher_name') }}</th>
                        <th class="px-4 py-2 text-center text-gray-700">{{ trans('schedules.period_1') }}</th>
                        <th class="px-4 py-2 text-center text-gray-700">{{ trans('schedules.period_2') }}</th>
                        <th class="px-4 py-2 text-center text-gray-700">{{ trans('schedules.period_3') }}</th>
                        <th class="px-4 py-2 text-center text-gray-700">{{ trans('schedules.period_4') }}</th>
                        <th class="px-4 py-2 text-center text-gray-700">{{ trans('schedules.period_5') }}</th>
                        <th class="px-4 py-2 text-center text-gray-700">{{ trans('schedules.period_6') }}</th>
                        <th class="px-4 py-2 text-center text-gray-700">{{ trans('schedules.period_7') }}</th>
                        <th class="px-4 py-2 text-center text-gray-700">{{ trans('schedules.period_8') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($Teachers as $Teacher)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 relative">
                                <span class="font-semibold text-gray-800">{{ $Teacher->name }}</span>
                                @can('scheduale-create')
                                    <button wire:click="openScheduleModal({{ $Teacher->id }},{{ $Teacher->job_id }})"
                                        class="absolute top-1 right-1 p-1 text-blue-500 hover:bg-blue-50 rounded">
                                        <i class="ti-plus"></i>
                                    </button>
                                @endcan
                            </td>
                            @for ($i = 1; $i <= 8; $i++)
                                <td class="px-4 py-2 text-center text-gray-600">{{ $Schedules->where('user_id', $Teacher->id)->where('period', $i)->first()->class->title ?? '-' }}</td>
                            @endfor
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @if ($showScheduleModal)
        <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">
            <div class="bg-white rounded-xl shadow-lg w-full max-w-md mx-4">
                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-800">{{ trans('schedules.add_period') }}</h3>
                    <button wire:click="closeScheduleModal" class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    @error('error')
                        <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded-lg text-red-700">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('schedules.classroom') }}</label>
                        <select wire:model="class_id" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                            <option value="">{{ trans('schedules.select_classroom') }}</option>
                            @foreach ($classes as $classroom)
                                <option value="{{ $classroom->id }}">{{ $classroom->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('schedules.period') }}</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" wire:model="period">
                            <option selected value="">{{ trans('schedules.selected_period') }}</option>
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}">{{ trans('schedules.period') . ' ' . $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                    <button wire:click="closeScheduleModal" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 font-medium">{{ trans('schedules.cancel') }}</button>
                    <button wire:click="saveSchedule" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">{{ trans('schedules.save') }}</button>
                </div>
            </div>
        </div>
    @endif
</div>