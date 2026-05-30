<div>
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-6">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-4">
                <div class="md:col-span-3">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('employees.search') }}</label>
                    <input type="text" wire:model.live.debounce.300ms="name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                        placeholder="{{ trans('employees.search_placeholder') }}">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('employees.job') }}</label>
                    <select wire:model.live="job_id"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                        <option value="">{{ trans('employees.all_jobs') }}</option>
                        @foreach ($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label
                        class="block text-sm font-medium text-gray-700 mb-1">{{ trans('employees.join_date_from') }}</label>
                    <input wire:model.live="startDate" type="date"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                </div>
                <div class="md:col-span-2">
                    <label
                        class="block text-sm font-medium text-gray-700 mb-1">{{ trans('employees.join_date_to') }}</label>
                    <input wire:model.live="endDate" type="date"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                </div>
                <div class="md:col-span-3 flex items-end">
                    <button wire:click="resetFilters"
                        class="w-full px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 font-medium">{{ trans('employees.reset_filters') }}</button>
                </div>
            </div>

            <div class="flex justify-end gap-2">
                @can('employees-create')
                    <a href="{{ route('employees.create') }}"
                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 flex items-center gap-2">
                        <i class="ti-plus"></i>
                        {{ trans('general.new') }}
                    </a>
                @endcan

                @include('backend.employees.import')

            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6">
            <div class="overflow-x-auto">
                @can('employees-list')
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                                <th wire:click="sortBy('code')"
                                    class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase cursor-pointer hover:text-blue-600">
                                    {{ trans('employees.code') }}</th>
                                <th wire:click="sortBy('name')"
                                    class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase cursor-pointer hover:text-blue-600">
                                    {{ trans('employees.name') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.learning') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.grade_year') }}</th>
                                <th wire:click="sortBy('date_of_hiring')"
                                    class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase cursor-pointer hover:text-blue-600">
                                    {{ trans('employees.join_date') }}</th>
                                <th wire:click="sortBy('date_of_birth')"
                                    class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase cursor-pointer hover:text-blue-600">
                                    {{ trans('employees.birth_date') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.job') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.contract_start_date') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.ministry_code') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.sepicality') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.phone') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.national_id') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.national_id_expire_date') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.retirement_date') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.date_until_retire') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('employees.working_years') }}</th>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">
                                    {{ trans('general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($employees as $employee)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-center text-gray-600"> {{ $loop->iteration }}</td>
                                    <td class="px-4 py-2 text-gray-800">{{ $employee->code }}</td>
                                    <td class="px-4 py-2">
                                        <a target='_blank' href="{{ route('employees.show', $employee->id) }}"
                                            class="text-blue-600 hover:text-blue-800 font-medium">
                                            {{ $employee->name }}
                                        </a>
                                    </td>
                                    <td class="px-4 py-2 text-gray-600"> {{ $employee->learning }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->grade_year }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->date_of_hiring }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->date_of_birth }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->job->name ?? 'N/A' }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->contract_start_date }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->ministry_code }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->sepicality }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->phone }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->national_id }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->national_id_expire_date }}</td>
                                    <td class="px-4 py-2 text-gray-600">
                                        {{ \Carbon\Carbon::parse($employee->date_of_birth)->addYears(60)->toDateString() }}
                                    </td>
                                    <td class="px-4 py-2 text-gray-600">
                                        {{ \Carbon\Carbon::parse($employee->date_of_birth)->addYears(60)->diffInYears(\Carbon\Carbon::now()) }}
                                    </td>
                                    <td class="px-4 py-2 text-gray-600">
                                        {{ \Carbon\Carbon::parse($employee->date_of_hiring)->diffInYears(\Carbon\Carbon::now()) }}
                                    </td>
                                    <td class="px-4 py-2 text-center">
                                        <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                            [
                                                'type' => 'link',
                                                'url' => route('employees.destroy', $employee->id),
                                                'text' => trans('general.resign'),
                                                'icon' => 'ti-trash',
                                                'onclick' => 'confirmation(event)',
                                                'can' => 'employees-delete',
                                            ],
                                            [
                                                'type' => 'link',
                                                'url' => route('employees.show', $employee->id),
                                                'text' => trans('general.info'),
                                                'icon' => 'ti-info-alt',
                                                'target' => '_blank',
                                                'can' => 'employees-info',
                                            ],
                                            [
                                                'type' => 'link',
                                                'url' => route('employees.edit', $employee->id),
                                                'text' => trans('general.edit'),
                                                'icon' => 'ti-pencil',
                                                'target' => '_blank',
                                                'can' => 'employees-edit',
                                            ],
                                        ]" />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="18" class="px-4 py-8 text-center text-gray-500">
                                        {{ trans('general.not_found') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $employees->links('vendor.livewire.bootstrap') }}
                @endcan
            </div>
        </div>
    </div>
</div>
