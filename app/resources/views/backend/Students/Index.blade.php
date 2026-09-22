@extends('layouts.app')
@section('title')
    {{ trans('student.title') }}
@endsection
@section('content')
    @include('backend.msg')
    <div @class(['flex', 'align-items-center', 'justify-end', 'rounded', 'p-4', 'bg-white', 'gap-2', 'mb-4', 'shadow'])>
        @can('Students-create')
        <a href="{{ route('students.create') }}" @class(['flex', 'items-center', 'gap-2', 'px-3', 'py-2', 'text-sm', 'rounded-lg', 'transition-colors', 'cursor-pointer', 'bg-primary', 'text-white', 'hover:bg-primary/90'])>
            <x-hero-icon name="plus" @class(['w-4', 'h-4']) />
            {{ trans('general.new') }}</a>
        @endcan
        @can('Students-Import_Excel')
        @include('backend.Students.import')
        @endcan
    </div>
    @can('Students-list')
    <div @class(['bg-white', 'rounded-xl', 'shadow-sm', 'border', 'border-gray-100', 'overflow-hidden'])>

        <div @class(['container', 'mx-auto', 'p-6'])>
               <table @class(['min-w-full'])>
                    <thead @class(['bg-gray-50'])>
                    <tr>
                         <th @class(['px-6', 'py-3', 'text-center', 'text-xs', 'font-medium', 'text-gray-500', 'uppercase'])>#</th>
                         <th @class(['px-6', 'py-3', 'text-center', 'text-xs', 'font-medium', 'text-gray-500', 'uppercase'])>{{trans('student.name')}}</th>
                         <th @class(['px-6', 'py-3', 'text-center', 'text-xs', 'font-medium', 'text-gray-500', 'uppercase'])>{{trans('Grades.title')}}</th>
                         <th @class(['px-6', 'py-3', 'text-center', 'text-xs', 'font-medium', 'text-gray-500', 'uppercase'])>{{trans('class_rooms.name')}}</th>
                         <th @class(['px-6', 'py-3', 'text-center', 'text-xs', 'font-medium', 'text-gray-500', 'uppercase'])>{{trans('general.actions')}}</th>
                         
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Students as $Student )
                     <tr @class(['hover:bg-gray-50'])>
                         <td @class(['px-6', 'py-4', 'text-center', 'text-sm', 'text-gray-600'])>{{$loop->index+1}}</td>
                         <td @class(['px-6', 'py-4', 'text-center', 'text-sm', 'text-gray-600'])>{{$Student->fullName()}}</td>
                         <td @class(['px-6', 'py-4', 'text-center', 'text-sm', 'text-gray-600'])>{{$Student->grade->name}}</td>
                         <td @class(['px-6', 'py-4', 'text-center', 'text-sm', 'text-gray-600'])>{{$Student->classroom->name}}</td>
                         <td @class(['px-6', 'py-4', 'text-center', 'text-sm', 'text-gray-600'])>
                          <x-dropdown-table :buttonText="trans('general.buttons.action')">
                            @can('Students-info')
                            <a href="{{ route('students.show', $Student->id) }}"
                                        @class(['flex', 'items-center', 'gap-2', 'px-3', 'py-2', 'text-sm', 'rounded-lg', 'text-gray-700', 'hover:bg-gray-50'])>
                                        <x-hero-icon name="information-circle" @class(['w-5', 'h-5', 'text-gray-400']) />
                                        {{ trans('general.buttons.view') }}
                                    </a>
                            @endcan
                              @can('Students-edit')
                            <a href="{{ route('students.edit', $Student->id) }}"
                                        @class(['flex', 'items-center', 'gap-2', 'px-3', 'py-2', 'text-sm', 'rounded-lg', 'text-gray-700', 'hover:bg-gray-50'])>
                                        <x-hero-icon name="pencil" @class(['w-5', 'h-5', 'text-gray-400']) />
                                        {{ trans('general.buttons.edit') }}
                                    </a>
                            @endcan
                            @can('fee_invoice-create')
                            <a href="{{ route('fee-invoice.create', $Student->id) }}"
                                        @class(['flex', 'items-center', 'gap-2', 'px-3', 'py-2', 'text-sm', 'rounded-lg', 'text-gray-700', 'hover:bg-gray-50'])>
                                        <x-hero-icon name="money" @class(['w-5', 'h-5', 'text-gray-400']) />
                                        {{ trans('general.fee_invoice') }}
                                    </a>
                            @endcan
                                 @can('ReceiptPayment-create')
                            <a href="{{ route('receipt-payment.create', $Student->id) }}"
                                        @class(['flex', 'items-center', 'gap-2', 'px-3', 'py-2', 'text-sm', 'rounded-lg', 'text-gray-700', 'hover:bg-gray-50'])>
                                        <x-hero-icon name="credit-card" @class(['w-5', 'h-5', 'text-gray-400']) />
                                        {{ trans('general.ReceiptPayment') }}
                                    </a>
                            @endcan 
                            @can('payment_parts-create')
                            <a href="{{ route('payment-parts.create', $Student->id) }}"
                                        @class(['flex', 'items-center', 'gap-2', 'px-3', 'py-2', 'text-sm', 'rounded-lg', 'text-gray-700', 'hover:bg-gray-50'])>
                                        <x-hero-icon name="credit-card" @class(['w-5', 'h-5', 'text-gray-400']) />
                                        {{ trans('PaymentParts.title') }}
                                    </a>
                            @endcan
                             @can('Students-graduated')
                                    <form :action="`{{ route('students.destroy', '') }}/${item.id}`" method="POST" @class(['w-full']) x-on:submit="confirmation(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            @class(['w-full', 'flex', 'items-center', 'gap-2', 'px-3', 'py-2', 'text-sm', 'rounded-lg', 'transition-colors', 'text-indigo-600', 'hover:bg-indigo-50'])>
                                            <x-hero-icon name="graduation-cap" @class(['w-5', 'h-5']) />
                                            {{ trans('student.graduated') }}
                                        </button>
                                    </form>
                                    @endcan
                        </x-dropdown-table>

                         </td>
                        </tr>
                    @empty
                          <tr>
                            <td colspan="10" @class(['px-6', 'py-12', 'text-center'])>
                                <div @class(['bg-blue-50', 'text-blue-600', 'px-4', 'py-3', 'rounded-lg', 'inline-block'])>
                                    {{ trans('general.Msg') }}
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div>{{$Students->links()}}</div>
           
                             
            </div>
        </div>
            @endcan

@endsection
