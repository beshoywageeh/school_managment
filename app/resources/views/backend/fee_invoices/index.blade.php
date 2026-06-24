@extends('layouts.app')
@section('title')
    {{ trans('fee_invoice.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('fee_invoice.title') }}</h4>
        </div>

        @can('fee_invoice-list')
        <div class="container mx-auto p-6">
            <x-smart-table
                :columns="$columns"
                :initial-items="$fee_invoices"
                api-url="{{ route('fee_invoice.index') }}"
            >

            </x-smart-table>
        </div>

        @endcan
    @endsection
