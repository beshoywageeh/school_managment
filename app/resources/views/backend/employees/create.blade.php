@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }} | {{ trans('general.new') }}
@endsection
@section('content')
    @include('backend.msg')
    <form id="form-with-multiple-column" action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4 flex flex-wrap gap-4">
            <div class="flex-1 min-w-[320px]">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                    <div class="p-6">
                        <h4 class="text-lg font-semibold mb-4 text-center">{{ trans('employees.personal_info') }}</h4>

                        <div class="flex flex-wrap gap-4 mb-4">
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="name" value="{{ old('name') }}"
                                    type="text">{{ trans('employees.name') }}</x-input>
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="learning" value="{{ old('learning') }}"
                                    type="text">{{ trans('employees.learning') }}</x-input>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mb-4">
                            <div class="flex-1 min-w-[200px]">
                                <label for="grade_year" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('employees.grade_year') }}</label>
                                <select name="grade_year" id="grade_year" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white">
                                    <option value="" selected>{{ trans('employees.grade_year') }}</option>
                                    @foreach ($years as $year)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <x-input type="date" name="birth_date"
                                    value="{{ old('birth_date') }}">{{ trans('employees.birth_date') }}</x-input>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mb-4">
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="phone" value="{{ old('phone') }}"
                                    type="text">{{ trans('employees.phone') }}</x-input>
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="national_id" value="{{ old('national_id') }}"
                                    type="text">{{ trans('employees.national_id') }}</x-input>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mb-4">
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="sepicality" value="{{ old('sepicality') }}"
                                    type="text">{{ trans('employees.sepicality') }}</x-input>
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="ministry_code" value="{{ old('ministry_code') }}"
                                    type="text">{{ trans('employees.ministry_code') }}</x-input>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mb-4">
                            <div class="flex-1 min-w-[200px]">
                                <x-input type="date" name="national_id_expire_date"
                                    value="{{ old('national_id_expire_date') }}">{{ trans('employees.national_id_expire_date') }}</x-input>
                            </div>
                            <x-input.gender-select />
                            <x-input.religion-select />
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('employees.address') }}</label>
                            <textarea class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all" name="address" placeholder="{{ trans('employees.address') }}">{{ old('address') }}</textarea>
                            <x-input-error :messages="$errors->get('address')" />
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('employees.notes') }}</label>
                            <textarea class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all" name="note" placeholder="{{ trans('employees.notes') }}">{{ old('note') }}</textarea>
                            <x-input-error :messages="$errors->get('note')" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-1 min-w-[320px]">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-4">
                    <div class="p-6">
                        <h4 class="text-lg font-semibold mb-4 text-center">{{ trans('employees.job_info') }}</h4>

                        <div class="flex flex-wrap gap-4 mb-4">
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="contract_start_date" value="{{ old('contract_start_date') }}"
                                    type="date">{{ trans('employees.contract_start_date') }}</x-input>
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="date_of_hiring" value="{{ old('date_of_hiring') }}"
                                    type="date">{{ trans('employees.join_date') }}</x-input>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mb-4">
                            <x-input.job_type />
                            <div class="flex-1 min-w-[200px]">
                                <label for="jobs" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('employees.job_title') }}</label>
                                <select name="job_id" id="jobs" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white">
                                    <option selected> ---{{ trans('employees.select_worker_title') }}---</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mb-4">
                            <div class="flex-1 min-w-[200px]">
                                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('employees.insurance_status') }}</label>
                                <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white" name="status">
                                    <option value="" selected disabled>{{ trans('employees.insurance_status') }}</option>
                                    <option value="0">{{ trans('employees.insur') }}</option>
                                    <option value="1">{{ trans('employees.contracted') }}</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" />
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="lesson_count" value="{{ old('lesson_count', 24) }}"
                                    type="number">{{ trans('employees.lesson_count') }}</x-input>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4 mb-4">
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="insurance_date" value="{{ old('insurance_date') }}"
                                    type="date">{{ trans('employees.insurance_date') }}</x-input>
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <x-input name="insurance_number"
                                    type="text">{{ trans('employees.insurance_number') }}</x-input>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-4">
                    <div class="p-6">
                        <h4 class="text-lg font-semibold mb-4 text-center">{{ trans('employees.attachment') }}</h4>

                        <div class="mb-4">
                            <div class="flex gap-2">
                                <div class="relative flex-1">
                                    <input type="file" name="file" multiple
                                        accept="image/png,image/jpeg,application/pdf"
                                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" id="inputGroupFile02">
                                    <label class="block text-sm text-gray-600 mt-1"
                                        for="inputGroupFile02">{{ trans('general.choose_file') }}</label>
                                </div>
                                <span class="inline-flex items-center px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-700">{{ trans('general.upload') }}</span>
                            </div>
                            <x-input-error :messages="$errors->get('file')" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="p-6 text-center sm:text-right">
                <x-button class="secondary" type="button">{{ trans('general.Cancel') }}</x-button>
                <x-button class="success" type="submit">{{ trans('general.Submit') }}</x-button>
            </div>
        </div>
    </form>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#worker_type').addEventListener('change', function() {
                    const workerTypeId = this.value;
                    const jobsSelect = document.querySelector('#jobs');
                    if (!workerTypeId) return;
                    jobsSelect.innerHTML = '<option>{{ trans('general.loading') }}</option>';

                    fetch("{{ URL::to('/ajax/get_jobs') }}/" + workerTypeId)
                        .then(response => response.json())
                        .then(data => {
                            jobsSelect.innerHTML =
                                '<option>{{ trans('employees.select_worker_type') }}</option>';
                            data.forEach(function(job) {
                                const opt = document.createElement('option');
                                opt.value = job.id;
                                opt.textContent = job.name;
                                jobsSelect.appendChild(opt);
                            });
                        })
                        .catch(error => console.error('Error fetching jobs:', error));
                });
            });
        </script>
    @endpush
@endsection
