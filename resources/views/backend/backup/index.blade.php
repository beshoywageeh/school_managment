@php
$page = Str::after(Str::ucfirst(request()->route()->uri()), '/');
@endphp
@extends('layouts.app')
@section('page_title')
{{ trans($page . '.title') }}
@endsection
@push('css')
<style>
    table,
    thead,
    tbody,
    tr,
    td,
    th {
        text-align: center !important;
    }
</style>
@endpush
@section('main_content')
@include('backend.msg')

<div>
    <x-card :page="$page">
        <x-slot name="button">
            <a href="{{ route('backup.create') }}" class="btn btn-primary" role="button">{{trans('backeup.create')}}</a>
        </x-slot>
        <x-table.table>

            <x-slot name="head">
                <thead>
                    <tr>

                        <th>#</th>
                        <th>{{ trans('backup.Name') }}</th>
                        <th>{{ trans('backup.date') }}</th>
                        <th>{{ trans('backup.size') }}</th>
                        <th colspan="2">{{ trans('backup.time') }}</th>
                        <th>{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
            </x-slot>
            <tbody>
                @forelse ($data['backups'] as $backup)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td>{{ $backup['filename'] }}</td>
                    <td>{{$backup['filecreated']->format('Y/m/d')}}</td>
                    <td>{{$backup['filesize']}}</td>
                    <td colspan='2'>
                        {{$backup['filecreated']->format('g:i:s A')}} | {{$backup['filecreated']->diffForHumans()}}

                    </td>

                    <td>
                        <a href="{{$backup['filepath']}}
                        " class="btn btn-plain-primary btn-xs" role="button" download><i data-feather="download"
                                height="1rem" width="1rem"></i></a>

                    </td>
                </tr>
                @empty
                <div class="alert alert-info" role="alert">
                    <p>{{ trans('General.Msg') }}</p>
                </div>
                @endforelse
            </tbody>

            </x-table.tab>
    </x-card>
</div>
@endsection
@push('scripts')
@endpush