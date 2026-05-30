@extends('layouts.app')
@section('title')
    {{ trans('fees.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('fees.title') }}</h4>
            @can('schoolfees-list')
                <button onclick="window.dispatchEvent(new Event('open-modal-create-fee'))" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    {{ trans('general.new') }}
                </button>
                @include('backend.school_fees.create')
            @endcan
        </div>

        @can('schoolfees-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fees.title') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fees.grade') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fees.classroom') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('academic_year.title') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fees.desc') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fees.amount') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fees.by') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($School_Fees as $fee)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $fee->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee->grade->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee->classroom->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee->year->view }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee->description }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $fee->amount }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee->user->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee->created_at->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-1">
                                    @can('schoolfees-info')
                                    <a href="{{ route('school_fees.show', $fee->id) }}" target="_blank" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg" title="{{ trans('general.info') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('schoolfees-edit')
                                    <a href="{{ route('school_fees.edit', $fee->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('general.edit') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('schoolfees-delete')
                                    <form action="{{ route('school_fees.destroy', $fee->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="px-6 py-12 text-center">
                                <div class="bg-blue-50 text-blue-600 px-4 py-3 rounded-lg inline-block">
                                    {{ trans('general.Msg') }}
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($School_Fees->hasPages())
            <div class="p-4 border-t border-gray-100 flex justify-between items-center">
                <div class="text-sm text-gray-500">
                    Showing {{ $School_Fees->firstItem() ?? 0 }} to {{ $School_Fees->lastItem() ?? 0 }} of {{ $School_Fees->total() }} results
                </div>
                <div class="flex gap-1">
                    {{ $School_Fees->links() }}
                </div>
            </div>
            @endif
        @endcan
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#grades').addEventListener('change', function() {
                    const classrooms = document.querySelector('#classrooms');
                    classrooms.innerHTML = '<option>{{ trans('general.loading') }}</option>';
                    const grade = this.value;
                    if (grade) {
                        fetch("{{ URL::to('/ajax/get_classRooms') }}/" + grade)
                            .then(response => response.json())
                            .then(data => {
                                classrooms.innerHTML =
                                    '<option selected disabled>{{ trans('student.choose_classroom') }}</option>';
                                data.forEach(function(value) {
                                    const opt = document.createElement('option');
                                    opt.value = value.id;
                                    opt.textContent = value.name;
                                    classrooms.appendChild(opt);
                                });
                            })
                            .catch(error => console.error('Error fetching classrooms:', error));
                    }
                });
            });
        </script>
    @endpush
@endsection