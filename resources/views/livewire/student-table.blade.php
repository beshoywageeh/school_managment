<div>
    {{-- Filter Section --}}
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label>{{ trans('student.search') }}</label>
                    <input wire:model.live.debounce.300ms="search" type="text" class="form-control" placeholder="{{ trans('student.search_placeholder') }}">
                </div>
                <div class="col">
                    <label>{{ trans('student.grade') }}</label>
                    <select wire:model.live="grade_id" class="custom-select">
                        <option value="">{{ trans('student.all_grades') }}</option>
                        @foreach($this->grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label>{{ trans('student.class') }}</label>
                    <select wire:model.live="classroom_id" class="custom-select" @if(count($this->classrooms) == 0) disabled @endif>
                        <option value="">{{ trans('student.all_classrooms') }}</option>
                        @foreach($this->classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label>{{ trans('student.join_date_from') }}</label>
                    <input wire:model.live="joinDateFrom" type="date" class="form-control">
                </div>
                <div class="col">
                    <label>{{ trans('student.join_date_to') }}</label>
                    <input wire:model.live="joinDateTo" type="date" class="form-control">
                </div>
                <div class="col"> {{-- Added margin-top for spacing --}}
                    <label>{{ trans('student.per_page') }}</label>
                    <select wire:model.live="perPage" class="custom-select">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- Table Section --}}
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th wire:click="sortBy('students.name')" style="cursor: pointer;">{{ trans('student.name') }}</th>
                            <th wire:click="sortBy('parent_name')" style="cursor: pointer;">{{ trans('student.parent_header') }}</th>
                            <th wire:click="sortBy('grade_name')" style="cursor: pointer;">{{ trans('student.grade') }}</th>
                            <th wire:click="sortBy('classroom_name')" style="cursor: pointer;">{{ trans('student.class') }}</th>
                            <th wire:click="sortBy('students.join_date')" style="cursor: pointer;">{{ trans('student.join_date') }}</th>
                            <th>{{ trans('student.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->parent_name }}</td>
                                <td>{{ $student->grade_name }}</td>
                                <td>{{ $student->classroom_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($student->join_date)->format('d/m/Y') }}</td>
                                <td>
                                    <x-student-table-action :id="$student->id" />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">{{ trans('student.no_students_found') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $students->links() }}
            </div>
        </div>
    </div>
</div>
