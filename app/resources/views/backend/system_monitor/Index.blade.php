@extends('layouts.app')
@section('title')
    {{ trans('log.index.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('log.index.user') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('log.index.type') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('log.index.description') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('log.index.date') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('log.index.time') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($activities as $activity)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $activity->user->name ?? 'غير معروف' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $activity->action }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            {{ $activity->description ?: '-' }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $activity->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $activity->created_at->format('H:i:s') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if($activities->hasPages())
        <div class="p-4 border-t border-gray-100 flex justify-between items-center">
            <div class="text-sm text-gray-500">
                Showing {{ $activities->firstItem() ?? 0 }} to {{ $activities->lastItem() ?? 0 }} of {{ $activities->total() }} results
            </div>
            <div class="flex gap-1">
                {{ $activities->links() }}
            </div>
        </div>
        @endif
    </div>
@endsection