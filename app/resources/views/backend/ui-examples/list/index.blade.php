@extends('layouts.app')
@section('title', 'الحسابات البنكية')

@section('content')
<div class="flex flex-col gap-4">
    <x-ui.page-header title="الحسابات البنكية" module="primary">
        <x-slot:actions>
            <x-ui.button variant="primary" icon="plus"
                x-on:click="window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'create-form' } }))">
                إضافة حساب
            </x-ui.button>
        </x-slot:actions>
    </x-ui.page-header>

    <x-ui.filter-panel>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">اسم الحساب</label>
            <input type="text" x-model="filters.name" placeholder="بحث..."
                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">الحالة</label>
            <select x-model="filters.status"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
                <option value="">الكل</option>
                <option value="active">نشط</option>
                <option value="inactive">غير نشط</option>
            </select>
        </div>
    </x-ui.filter-panel>

    <x-ui.data-table
        endpoint="/api/bank-accounts"
        :columns="[
            ['key' => 'id', 'label' => '#', 'sortable' => true],
            ['key' => 'name', 'label' => 'اسم الحساب', 'sortable' => true],
            ['key' => 'account_number', 'label' => 'رقم الحساب'],
            ['key' => 'status', 'label' => 'الحالة'],
            ['key' => 'created_at', 'label' => 'تاريخ الإضافة', 'sortable' => true],
        ]"
        :per-page="15">
        <x-slot:actions>
            <div class="flex items-center gap-1">
                <x-ui.button variant="secondary" icon="edit"
                    x-on:click="window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'edit-form', row } }))">
                </x-ui.button>
                <x-ui.button variant="danger" icon="trash">
                </x-ui.button>
            </div>
        </x-slot:actions>
    </x-ui.data-table>
</div>

{{-- Create Modal --}}
<x-ui.modal title="إضافة حساب بنكي" name="create-form">
    <form x-data="{ form: { name: '', account_number: '', status: 'active' }, errors: {}, saving: false }"
        x-on:submit.prevent="
            saving = true; errors = {};
            try {
                const res = await window.axios.post('/api/bank-accounts', form);
                window.dispatchEvent(new CustomEvent('close-modal'));
                window.dispatchEvent(new CustomEvent('add-toast', {
                    detail: { id: Date.now(), message: 'تم الحفظ بنجاح', type: 'success', duration: 5000 }
                }));
                refresh();
            } catch (err) {
                if (err.errors) errors = err.errors;
            } finally { saving = false; }
        ">
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">اسم الحساب</label>
                <input type="text" x-model="form.name"
                    class="w-full border rounded-lg px-3 py-2 text-sm"
                    :class="{ 'border-red-500': errors.name }">
                <template x-if="errors.name">
                    <p class="text-red-500 text-xs mt-1" x-text="errors.name[0]"></p>
                </template>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">رقم الحساب</label>
                <input type="text" x-model="form.account_number"
                    class="w-full border rounded-lg px-3 py-2 text-sm"
                    :class="{ 'border-red-500': errors.account_number }">
                <template x-if="errors.account_number">
                    <p class="text-red-500 text-xs mt-1" x-text="errors.account_number[0]"></p>
                </template>
            </div>
        </div>
        <x-slot:footer>
            <x-ui.button variant="secondary" x-on:click="closeModal()">إلغاء</x-ui.button>
            <x-ui.button variant="primary" type="submit" :disabled="saving">
                <span x-text="saving ? 'جاري الحفظ...' : 'حفظ'"></span>
            </x-ui.button>
        </x-slot:footer>
    </form>
</x-ui.modal>
@endsection
