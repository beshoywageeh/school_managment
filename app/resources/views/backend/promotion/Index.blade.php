@extends('layouts.app')
@section('title')
    {{ trans('promotions.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-bold text-gray-800">{{ trans('promotions.title') }}</h4>
            @can('promotion-create')
                <a href="{{ route('promotion.create') }}" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    {{ trans('general.new') }}
                </a>
            @endcan
        </div>

        @can('promotion-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('promotions.student') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-600 uppercase">{{ trans('promotions.from_gradename') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-600 uppercase">{{ trans('promotions.from_classroom') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-600 uppercase">{{ trans('promotions.from_year') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-green-600 uppercase">{{ trans('promotions.to_gradename') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-green-600 uppercase">{{ trans('promotions.to_classroom') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-green-600 uppercase">{{ trans('promotions.to_year') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($promotions as $promotion)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $promotion->student->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $promotion->f_grade->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $promotion->f_class->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $promotion->f_acc->view }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $promotion->t_grade->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $promotion->t_class->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $promotion->t_acc->view }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $promotion->created_at->format('d-m-Y') }}</td>
                            <td class="px-6 py-4 text-center">
                                @can('promotion-delete')
                                <form action="{{ route('promotion.destroy', $promotion->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-danger hover:bg-danger/10 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="px-6 py-12 text-center text-gray-500">
                                {{ trans('general.Msg') }}
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        @endcan
    </div>
@endsection
