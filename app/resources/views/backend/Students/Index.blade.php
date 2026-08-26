@extends('layouts.app')
@section('title')
    {{ trans('student.title') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="flex align-items-center justify-end rounded p-4 bg-white gap-2 mb-4 shadow">
        @can('Students-create')
        <a href="{{ route('students.create') }}" class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg transition-colors cursor-pointer bg-primary text-white hover:bg-primary/90">
            <x-hero-icon name="plus" class="w-4 h-4" />
            {{ trans('general.new') }}</a>
        @endcan
        @can('Students-Import_Excel')
        @include('backend.Students.import')
        @endcan
    </div>
    @can('Students-list')
        <div class="container mx-auto p-6">
            <x-smart-table
                :columns="$columns"
                :initial-items="$students"
                api-url="{{ route('students.index') }}"
                >
                    <x-slot:actions>

                        <div class="relative inline-block" x-data="{ open: false }" x-on:click.outside="open = false">

                            <button type="button" x-on:click="open = !open" :aria-expanded="open"
                                class="inline-flex items-center gap-1.5 h-8 px-3 bg-primary hover:bg-primary/90 active:bg-primary text-white text-sm font-medium rounded-lg transition-colors select-none cursor-pointer">
                               {{trans('general.actions')}}
                                <svg x-bind:class="open ? 'rotate-180' : ''" class="w-3.5 h-3.5 transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div x-show="open" x-transition
                                class="absolute right-0 mt-1 min-w-[180px] bg-white border-gray-200 rounded-xl z-50 p-1 origin-top-right shadow-lg"
                                style="display: none;">
                                    @php
                                    $links=[
                                    [
                                        'can' => 'Students-info',
                                        'url' => route('students.show', 'ID_PLACEHOLDER'),
                                        'icon' => 'information-circle',
                                        'text' => trans('general.buttons.view'),

                                        'className' => 'text-primary hover:bg-primary/10',
                                    ],
                                    [
                                        'can' => 'Students-edit',
                                        'url' => route('students.edit', 'ID_PLACEHOLDER'),
                                        'icon' => 'pencil',
                                        'text' => trans('general.buttons.edit'),

                                        'className' => 'text-primary hover:bg-primary/10',
                                    ],
                                    [
                                        'can' => 'fee_invoice-create',
                                        'url' => route('fee-invoice.create',  'ID_PLACEHOLDER'),
                                        'icon' => 'money',
                                        'text' => trans('general.fee_invoice'),
                                        'className' => 'text-primary hover:bg-primary/10',

                                    ],
                                    [
                                        'can' => 'ReceiptPayment-create',
                                        'url' => route('receipt-payment.create',  'ID_PLACEHOLDER'),
                                        'icon' => 'credit-card',
                                        'text' => trans('general.ReceiptPayment'),
                                        'className' => 'text-primary hover:bg-primary/10',

                                    ],
                                    [
                                        'can' => 'payment_parts-create',
                                        'url' => route('payment-parts.create',  'ID_PLACEHOLDER'),
                                        'icon' => 'credit-card',
                                        'text' => trans('Sidebar.payment_parts'),
                                        'className' => 'text-primary hover:bg-primary/10 ',

                                    ],
                                    ]
                                    @endphp
                                    @foreach($links as $link)
                                        @can($link['can'])
                                    <a :href="'{{ $link['url'] }}'.replace('ID_PLACEHOLDER', item.id)"
                                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg transition-colors {{ $link['className'] ?? '' }}">
                                       <x-hero-icon name="{{ $link['icon'] }}" class="w-5 h-5" />
                                       {{ $link['text'] }}
                                    </a>
                                    @endcan
                                    @endforeach
                                    @can('Students-graduated')
                                    <form :action="`{{ route('students.destroy', '') }}/${item.id}`" method="POST" class="w-full" x-on:submit="confirmation(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="w-full flex items-center gap-2 px-3 py-2 text-sm rounded-lg transition-colors text-indigo-600 hover:bg-indigo-50">
                                            <x-hero-icon name="graduation-cap" class="w-5 h-5" />
                                            {{ trans('student.graduated') }}
                                        </button>
                                    </form>
                                    @endcan
                            </div>
                        </div>

                        </x-slot:actions>
                </x-smart-table>
            </div>
        @endcan

@endsection
