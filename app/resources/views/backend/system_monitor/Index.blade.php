@extends('layouts.app')
@section('title')
    {{ trans('log.index.title') }}
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        {{-- total --}}
        <x-stat_card color="blue">
            <div class="w-16 h-16 rounded-xl bg-blue-500 flex items-center justify-center text-white">

            </div>
            <div>
                <h3 class="text-3xl font-bold text-gray-800">{{ $data['total'] }}</h3>
                <p class="text-gray-500">{{ trans('log.index.total') }}</p>
            </div>
        </x-stat_card>
        {{-- today --}}
        {{-- this week --}}
        {{-- this month --}}
    </div>
    {{-- Filters --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 mb-6"
         x-data="{ open: {{ request()->anyFilled(['user_id','action','from_date','to_date']) ? 'true' : 'false' }} }">
        <button @click="open = !open" class="flex items-center gap-2 text-sm text-gray-600 hover:text-gray-800">
            <x-hero-icon name="funnel" class="w-4 h-4" />
            {{ trans('general.search') }}
            <svg class="w-4 h-4" :class="open && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <form method="GET" x-show="open" x-transition class="mt-4 grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <x-input-label>{{ trans('log.index.user') }}</x-input-label>
                <select name="user_id" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all tom-select">
                    <option value="">{{ trans('general.all') }}</option>
                    @foreach($users ?? [] as $user)
                        <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <x-input-label>{{ trans('log.index.type') }}</x-input-label>
                <input type="text" name="action" value="{{ request('action') }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all" placeholder="{{ trans('general.search') }}">
            </div>
            <div>
                <x-input-label>{{ trans('general.from') }}</x-input-label>
                <input type="date" name="from_date" value="{{ request('from_date') }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all">
            </div>
            <div>
                <x-input-label>{{ trans('general.to') }}</x-input-label>
                <input type="date" name="to_date" value="{{ request('to_date') }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all">
            </div>
            <div class="md:col-span-4 flex items-center gap-2">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 text-sm font-medium">
                    {{ trans('general.search') }}
                </button>
                @if(request()->anyFilled(['user_id','action','from_date','to_date']))
                    <a href="{{ route('system-lookup') }}" class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200 text-sm font-medium">
                        {{ trans('general.Cancel') }}
                    </a>
                @endif
            </div>
        </form>
    </div>

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
