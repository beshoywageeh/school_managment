@extends('layouts.app')
@section('title')
    {{ trans('student.title') }}
@endsection
@section('content')
    @include('backend.msg')

        @can('Students-list')
            <div class="container mx-auto p-6">
                <x-smart-table
                    :columns="$columns"
                    :initial-items="$students"
                    api-url="{{ route('students.index') }}"
                >
                    <x-slot:actions>
                        <x-slot:actions>
                            <a :href="'{{ route('students.show', 'ID_PLACEHOLDER') }}'.replace('ID_PLACEHOLDER', item.id)"
                               class="px-2.5 py-1.5 bg-blue-50 text-blue-600 rounded-lg text-xs font-semibold hover:bg-blue-100 transition">
                                👁️ عرض
                            </a>

                            <a :href="'{{ route('students.edit', 'ID_PLACEHOLDER') }}'.replace('ID_PLACEHOLDER', item.id)"
                               class="px-2.5 py-1.5 bg-yellow-50 text-yellow-600 rounded-lg text-xs font-semibold hover:bg-yellow-100 transition">
                                📝 تعديل
                            </a>
                        </x-slot:actions>
                    </x-slot:actions>
                </x-smart-table>
            </div>
        @endcan

@endsection
