@extends('layouts.app')
@section('title')
    {{ trans('Sidebar.books_sheets') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('Sidebar.books_sheets') }}</h4>
            @can('books_sheets-create')
                <button onclick="window.dispatchEvent(new CustomEvent('open-create-modal'))"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                    {{ trans('general.new') }}
                </button>
            @endcan
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('book_sheet.name') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('book_sheet.grade') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('book_sheet.classroom') }}</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('book_sheet.opening_qty') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('book_sheet.sales-price') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($books_sheets as $book_sheet)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">
                            {{ $book_sheet->name }}
                            <span class="mr-1 ml-1 px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700">
                                {{ $book_sheet->is_book == 1 ? trans('book_sheet.book') : trans('book_sheet.sheet') }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $book_sheet->grade->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $book_sheet->classroom->name }}</td>
                        <td class="px-6 py-4 text-center text-sm text-gray-600">
                            {{ $book_sheet->opening_qty + $book_sheet->orders->sum('pivot.quantity_in') - $book_sheet->orders->sum('pivot.quantity_out') }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ Number::currency($book_sheet->sales_price, 'EGP', 'ar') }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $book_sheet->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-1">
                                @can('books_sheets-update')
                                <button type="button" onclick="window.dispatchEvent(new CustomEvent('open-edit-{{ $book_sheet->id }}'))"
                                    class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('general.edit') }}">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                @endcan
                                @can('books_sheets-delete')
                                <form action="{{ route('books_sheets.destroy', $book_sheet->id) }}" method="POST" class="inline">
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
                    @include('backend.book_sheet.edit')
                    @empty
                    <tr>
                        <td colspan="8" class="px-6 py-12 text-center">
                            <span class="bg-blue-50 text-blue-600 px-4 py-3 rounded-lg inline-block">{{ trans('general.noDataToShow') }}</span>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @include('backend.book_sheet.create')
@endsection
