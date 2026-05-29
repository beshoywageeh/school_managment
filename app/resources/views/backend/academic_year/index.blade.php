@extends('layouts.app')
@section('title')
    {{ trans('academic_year.title') }}
@endsection

@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('academic_year.title') }}</h4>
            @can('academic_year-create')
                @include('backend.academic_year.create')
            @endcan
        </div>

        @can('academic_year-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('academic_year.year_start') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('academic_year.year_end') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('academic_year.view') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_by') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('academic_year.status') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.updated_by') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.updated_at') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($acadmice_years as $acadmice_year)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $acadmice_years->firstItem() + $loop->index }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ \Carbon\Carbon::parse($acadmice_year->year_start)->format('Y-m') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ \Carbon\Carbon::parse($acadmice_year->year_end)->format('Y-m') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $acadmice_year->view }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $acadmice_year->creator->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $acadmice_year->created_at->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 text-center">
                                <span class="px-2 py-1 text-xs font-medium rounded-full {{ $acadmice_year->status->color() }}">
                                    {{ $acadmice_year->status->lang() }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $acadmice_year->updator ? $acadmice_year->updator->name : '' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $acadmice_year->updator ? $acadmice_year->updated_at->format('Y-m-d') : '' }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-1">
                                    @can('academic_year-info')
                                    <a href="{{ route('academic_year.show', $acadmice_year->id) }}" target="_blank" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg" title="{{ trans('general.info') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('academic_year-edit')
                                    @include('backend.academic_year.edit')

                                    @endcan
                                    @can('academic_year-delete')
                                    <form action="{{ route('academic_year.destroy', $acadmice_year->id) }}" method="POST" class="inline">
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

            @if($acadmice_years->hasPages())
            <div class="p-4 border-t border-gray-100 flex justify-between items-center">
                <div class="text-sm text-gray-500">
                    Showing {{ $acadmice_years->firstItem() ?? 0 }} to {{ $acadmice_years->lastItem() ?? 0 }} of {{ $acadmice_years->total() }} results
                </div>
                <div class="flex gap-1">
                    {{ $acadmice_years->links() }}
                </div>
            </div>
            @endif
        @endcan
    </div>
@endsection
