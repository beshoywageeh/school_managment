<div x-data="{
    open:false,
    clothes:[{
        gradeId:'', classroomId:'', name:'', quantity:'',
        salesPriceIsSet:'', isset:false, purchasePrice:'', salePrice:'',
        classrooms:[]
    }],
    addRow(){
        this.clothes.push({
            gradeId:'', classroomId:'', name:'', quantity:'',
            salesPriceIsSet:'', isset:false, purchasePrice:'', salePrice:'',
            classrooms:[]
        });
    },
    removeRow(index){
        if (this.clothes.length > 1) this.clothes.splice(index, 1);
    },
    async loadClassrooms(index){
        const item = this.clothes[index];
        if (!item.gradeId) { item.classrooms = []; return; }
        try {
            const res = await fetch(`/ajax/get_classRooms/${item.gradeId}`);
            item.classrooms = await res.json();
        } catch { item.classrooms = []; }
    }
}">
    @can('clothes-create')
        <button x-on:click="open=true"
            class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium"><strong>{{ trans('general.new') }}</strong></button>
    @endcan

    {{-- Backdrop --}}
    <div x-show="open"
         x-transition
         class="fixed inset-0 z-50 flex items-start justify-center bg-black/50 p-4 pt-8"
         x-on:click.self="open = false">

        {{-- Modal Panel --}}
        <div x-transition
             class="bg-white rounded-xl shadow-xl w-full max-w-7xl">

            {{-- Header --}}
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center">
                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                    <h6 class="text-base font-medium text-gray-900">
                        {{ trans('general.new') }}
                    </h6>
                </div>
                <button x-on:click="open = false"
                    class="w-7 h-7 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Body --}}
            <form action="{{ route('clothes.store') }}" method="POST">
                @csrf
                <div class="px-6 py-4 overflow-x-auto">
                    <table class="min-w-full text-sm border-collapse">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <th class="px-3 py-2 text-xs font-medium text-gray-500 text-start whitespace-nowrap">{{ trans('Grades.title') }}</th>
                                <th class="px-3 py-2 text-xs font-medium text-gray-500 text-start whitespace-nowrap">{{ trans('class_rooms.title') }}</th>
                                <th class="px-3 py-2 text-xs font-medium text-gray-500 text-start whitespace-nowrap">{{ trans('stock.name') }}</th>
                                <th class="px-3 py-2 text-xs font-medium text-gray-500 text-start whitespace-nowrap">{{ trans('stock.quantity') }}</th>
                                <th class="px-3 py-2 text-xs font-medium text-gray-500 text-start whitespace-nowrap">{{ trans('clothes.sales_isset') }}</th>
                                <th class="px-3 py-2 text-xs font-medium text-gray-500 text-center whitespace-nowrap">{{ trans('general.isset') }}</th>
                                <th class="px-3 py-2 text-xs font-medium text-gray-500 text-start whitespace-nowrap">{{ trans('stock.purchase_price') }}</th>
                                <th class="px-3 py-2 text-xs font-medium text-gray-500 text-start whitespace-nowrap">{{ trans('stock.sale_price') }}</th>
                                <th class="px-3 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="(clothe, index) in clothes" :key="index">
                                <tr class="border-b border-gray-100 hover:bg-gray-50/50 transition-colors">
                                    {{-- Grade --}}
                                    <td class="p-2 align-middle">
                                        <select :name="`clothe[${index}][grade_id]`"
                                            x-model="clothe.gradeId"
                                            x-on:change="loadClassrooms(index)"
                                            class="w-36 h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-2 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none">
                                            <option value="" disabled selected>{{ trans('general.select') }}</option>
                                            @foreach ($grades as $grade)
                                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    {{-- Classroom --}}
                                    <td class="p-2 align-middle">
                                        <select :name="`clothe[${index}][classroom_id]`"
                                            x-model="clothe.classroomId"
                                            class="w-36 h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-2 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none">
                                            <option disabled selected>{{ trans('general.choose_grade') }}</option>
                                            <template x-for="cls in clothe.classrooms" :key="cls.id">
                                                <option x-bind:value="cls.id" x-text="cls.name"></option>
                                            </template>
                                        </select>
                                    </td>
                                    {{-- Name --}}
                                    <td class="p-2 align-middle">
                                        <input type="text" :name="`clothe[${index}][name]`"
                                            x-model="clothe.name"
                                            class="w-28 h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-2 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none">
                                    </td>
                                    {{-- Quantity --}}
                                    <td class="p-2 align-middle">
                                        <input type="number" :name="`clothe[${index}][quantity]`"
                                            x-model="clothe.quantity"
                                            class="w-20 h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-2 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none">
                                    </td>
                                    {{-- Sales Price (Isset) --}}
                                    <td class="p-2 align-middle">
                                        <input type="number" :name="`clothe[${index}][sales_price_isset]`"
                                            x-model="clothe.salesPriceIsSet"
                                            class="w-24 h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-2 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none">
                                    </td>
                                    {{-- Isset Checkbox --}}
                                    <td class="p-2 align-middle text-center">
                                        <input type="checkbox" :name="`clothe[${index}][isset]`"
                                            x-model="clothe.isset"
                                            class="w-4 h-4 accent-green-600 rounded cursor-pointer">
                                    </td>
                                    {{-- Purchase Price --}}
                                    <td class="p-2 align-middle">
                                        <div class="relative">
                                            <input type="number" :name="`clothe[${index}][purchase_price]`"
                                                x-model="clothe.purchasePrice"
                                                class="w-28 h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-2 pl-8 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none">
                                            <span class="absolute left-2 top-1/2 -translate-y-1/2 text-xs text-gray-400">ج.م</span>
                                        </div>
                                    </td>
                                    {{-- Sale Price --}}
                                    <td class="p-2 align-middle">
                                        <div class="relative">
                                            <input type="number" :name="`clothe[${index}][sale_price]`"
                                                x-model="clothe.salePrice"
                                                class="w-28 h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-2 pl-8 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none">
                                            <span class="absolute left-2 top-1/2 -translate-y-1/2 text-xs text-gray-400">ج.م</span>
                                        </div>
                                    </td>
                                    {{-- Remove --}}
                                    <td class="p-2 align-middle">
                                        <button type="button" @click="removeRow(index)"
                                            class="w-7 h-7 flex items-center justify-center rounded-lg text-red-400 hover:text-red-600 hover:bg-red-50 transition-colors"
                                            x-bind:disabled="clothes.length <= 1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    {{-- Add Row --}}
                                    <button type="button" @click="addRow()"
                                        class="mt-3 w-full px-4 py-2 text-sm font-medium text-green-600 bg-white border border-green-200 rounded-lg hover:bg-green-50 hover:border-green-400 transition cursor-pointer">
                                        {{ trans('general.new') }}
                                    </button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>


                </div>

                {{-- Footer --}}
                <div class="flex items-center justify-end gap-2 px-6 py-4 border-t border-gray-100">
                    <button type="button" x-on:click="open = false"
                        class="h-9 px-4 text-sm text-gray-600 rounded-lg border border-gray-200 hover:bg-gray-50 transition-colors">
                        {{ trans('general.Cancel') }}
                    </button>
                    <button type="submit"
                        class="h-9 px-4 text-sm font-medium text-white bg-green-600 hover:bg-green-700 rounded-lg transition-colors flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ trans('general.Submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
