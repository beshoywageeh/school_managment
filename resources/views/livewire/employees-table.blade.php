<div>
    <div class="card mb-40">
        <div class="card-body">
            <div class="row mb-20">
                <div class="col-md-3">
                    <label>{{ trans('employees.search') }}</label>
                    <input type="text" wire:model.live.debounce.300ms="name" class="form-control" placeholder="{{ trans('employees.search_placeholder') }}">
                </div>
                <div class="col-md-2">
                    <label>{{ trans('employees.job') }}</label>
                    <select wire:model.live="job_id" class="custom-select">
                        <option value="">{{ trans('employees.all_jobs') }}</option>
                        @foreach ($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label>{{ trans('employees.join_date_from') }}</label>
                    <input wire:model.live="startDate" type="date" class="form-control">
                </div>
                <div class="col-md-2">
                    <label>{{ trans('employees.join_date_to') }}</label>
                    <input wire:model.live="endDate" type="date" class="form-control">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button wire:click="resetFilters" class="btn btn-secondary">{{ trans('employees.reset_filters') }}</button>
                </div>
            </div>

            <div class="row">
                <div class="col text-md-right">
                    @can('employees-create')
                        <a href="{{ route('employees.create') }}" class="btn btn-success">
                            <i class="ti-plus"></i>
                            {{ trans('general.new') }}
                        </a>
                    @endcan
                    @can('employees-import_Excel')
                        <button type="button" class="btn btn-primary" data-target="#Import_Excel" data-toggle="modal"><i
                                class="ti-upload"></i>
                            {{ trans('general.Import_Excel') }}</button>
                        @include('backend.employees.import')
                    @endcan
                </div>
            </div>

        </div>
    </div>
    <div class='card'>
        <div class="card-body">
            <div class="table-responsive">
                @can('employees-list')
                    <table class="table table-striped table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th wire:click="sortBy('code')" style="cursor: pointer;">{{ trans('employees.code') }}</th>
                                <th wire:click="sortBy('name')" style="cursor: pointer;">{{ trans('employees.name') }}</th>
                                <th>{{ trans('employees.learning') }}</th>
                                <th>{{ trans('employees.grade_year') }}</th>
                                <th wire:click="sortBy('date_of_hiring')" style="cursor: pointer;">{{ trans('employees.join_date') }}</th>
                                <th wire:click="sortBy('date_of_birth')" style="cursor: pointer;">{{ trans('employees.birth_date') }}</th>
                                <th>{{ trans('employees.job') }}</th>
                                <th>{{ trans('employees.contract_start_date') }}</th>
                                <th>{{ trans('employees.ministry_code') }}</th>
                                <th>{{ trans('employees.sepicality') }}</th>
                                <th>{{ trans('employees.phone') }}</th>
                                <th>{{ trans('employees.national_id') }}</th>
                                <th>{{ trans('employees.national_id_expire_date') }}</th>
                                <th>{{ trans('employees.retirement_date') }}</th>
                                <th>{{ trans('employees.date_until_retire') }}</th>
                                <th>{{ trans('employees.working_years') }}</th>
                                <th>{{ trans('general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employees as $employee)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td>{{ $employee->code }}</td>
                                    <td><a target='_blank'
                                            href="{{ route('employees.show', $employee->id) }}">{{ $employee->name }}</a>
                                    </td>
                                    <td> {{ $employee->learning }}</td>
                                    <td>{{ $employee->grade_year }}</td>
                                    <td>{{ $employee->date_of_hiring }}</td>
                                    <td>{{ $employee->date_of_birth }}</td>
                                    <td>{{ $employee->job->name ?? 'N/A' }}</td>
                                    <td>{{ $employee->contract_start_date }}</td>
                                    <td>{{ $employee->ministry_code }}</td>
                                    <td>{{ $employee->sepicality }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->national_id }}</td>
                                    <td>{{ $employee->national_id_expire_date }}</td>
                                    <td>{{ \Carbon\Carbon::parse($employee->date_of_birth)->addYears(60)->toDateString() }}
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($employee->date_of_birth)->addYears(60)->diffInYears(\Carbon\Carbon::now()) }}
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($employee->date_of_hiring)->diffInYears(\Carbon\Carbon::now()) }}
                                    </td>
                                    <td>
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
                                    <td colspan="18" class="text-center">{{ trans('general.not_found') }}</td>
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
