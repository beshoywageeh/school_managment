@extends('layouts.app')
@section('title', 'تفاصيل الحساب')

@section('content')
<div class="flex flex-col gap-6">
    <x-ui.detail-header
        title="الحساب البنكي - بنك الرياض"
        status="active"
        statusLabel="نشط"
        :balance="150000">
        <x-slot:actions>
            <x-ui.button variant="secondary" icon="edit">تعديل</x-ui.button>
            <x-ui.button variant="danger" icon="block">تعطيل</x-ui.button>
        </x-slot:actions>
    </x-ui.detail-header>

    <x-ui.tabs :tabs="[
        ['key' => 'details', 'label' => 'التفاصيل'],
        ['key' => 'transactions', 'label' => 'المعاملات'],
        ['key' => 'statement', 'label' => 'كشف الحساب'],
    ]">
        <x-slot:details>
            <div class="bg-white rounded-xl border border-gray-200 p-6">
                <dl class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <dt class="text-sm text-gray-500">اسم الحساب</dt>
                        <dd class="text-sm font-medium text-gray-900 mt-1">بنك الرياض</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">رقم الحساب</dt>
                        <dd class="text-sm font-medium text-gray-900 mt-1">SA1234567890</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">الفرع</dt>
                        <dd class="text-sm font-medium text-gray-900 mt-1">الرياض - الروضة</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-gray-500">الحالة</dt>
                        <dd class="mt-1">
                            <x-ui.status-badge status="active" label="نشط" />
                        </dd>
                    </div>
                </dl>
            </div>
        </x-slot:details>

        <x-slot:transactions>
            <x-ui.data-table
                endpoint="/api/bank-accounts/1/transactions"
                :columns="[
                    ['key' => 'id', 'label' => '#', 'sortable' => true],
                    ['key' => 'date', 'label' => 'التاريخ', 'sortable' => true],
                    ['key' => 'description', 'label' => 'البيان'],
                    ['key' => 'amount', 'label' => 'المبلغ', 'sortable' => true],
                    ['key' => 'type', 'label' => 'النوع'],
                ]"
                :per-page="10">
            </x-ui.data-table>
        </x-slot:transactions>

        <x-slot:statement>
            <div class="bg-white rounded-xl border border-gray-200 p-6 text-center text-gray-500">
                <p>بيانات كشف الحساب قيد التحميل...</p>
            </div>
        </x-slot:statement>
    </x-ui.tabs>
</div>
@endsection
