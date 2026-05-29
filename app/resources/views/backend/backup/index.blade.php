@extends('layouts.app')
@section('title')
    {{ trans('backup.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-6">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('backup.title') }}</h4>
            @can('backup-list')
                <a href="{{ route('backup.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 flex items-center gap-2" id="create" role="button">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                    {{ trans('general.buttons.create') }}
                </a>
            @endcan
        </div>

        @can('backup-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('backup.folder_name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('backup.disk') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('backup.reachable') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('backup.health') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('backup.num') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('backup.news') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('backup.storage') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($rows as $index => $backup)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $backup[0] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $backup['disk'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $backup[1] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $backup[2] }}</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $backup['amount'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $backup['newest'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $backup['usedStorage'] }}</td>
                        </tr>
                        @foreach($backup['files'] as $file)
                            @if($loop->first)
                            <tr>
                                <td colspan="8" class="px-6 py-4 bg-gray-50">
                                    <table class="min-w-full">
                                        <tr class="bg-white rounded-lg">
                                            <td class="px-4 py-2 text-sm font-medium text-gray-700">{{ trans('backup.news') }}</td>
                                            <td class="px-4 py-2 text-sm text-gray-600">{{ $file }}</td>
                                            <td class="px-4 py-2">
                                                <div class="flex items-center gap-2">
                                                    @can('backup-download')
                                                    <a href="{{ route('backup.download', $file) }}" class="px-3 py-1 bg-blue-500 text-white text-xs rounded-lg hover:bg-blue-600" title="{{ trans('general.buttons.download') }}">
                                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                        </svg>
                                                    </a>
                                                    @endcan
                                                    @can('backup-delete')
                                                    <form action="{{ route('backup.delete', $file) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="px-3 py-1 bg-red-500 text-white text-xs rounded-lg hover:bg-red-600" onclick="confirmation(event)" title="{{ trans('general.buttons.delete') }}">
                                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endcan
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        @can('backup-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('backup.name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created.at') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('backup.size') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase" colspan="2">{{ trans('backup.time') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.buttons.action') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($backups as $backup)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $backup['file_name'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $backup['file_date']->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $backup['file_size'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600" colspan="2">
                                {{ $backup['file_date']->format('g:i:s A') . ' | ' . $backup['file_date']->diffForHumans() }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    @can('backup-download')
                                    <a href="{{ route('backup.download', $backup['file_name']) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg" title="{{ trans('general.buttons.download') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('backup-delete')
                                    <form action="{{ route('backup.delete', $backup['file_name']) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.buttons.delete') }}">
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
                            <td colspan="7" class="px-6 py-12 text-center">
                                <div class="bg-blue-50 text-blue-600 px-4 py-3 rounded-lg inline-block">
                                    {{ trans('general.Msg') }}
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        @endcan
    </div>

@endsection

@push('scripts')
    <script>
        let btn = document.querySelector('#create');
        btn.addEventListener('click', function() {
            btn.classList.add('opacity-50', 'cursor-not-allowed');
            btn.innerHTML = `{{ trans('general.Messages.loading') }}`;
        });
    </script>
@endpush