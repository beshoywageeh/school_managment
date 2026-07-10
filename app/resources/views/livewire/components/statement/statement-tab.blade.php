<div>
    {{-- Date Filter --}}
    <div class="flex items-center gap-4 mb-4">
        <div class="flex items-center gap-2">
            <label class="text-sm text-gray-600">من تاريخ</label>
            <input type="date" wire:model.live="dateFrom"
                class="text-sm border border-gray-300 rounded-lg px-3 py-1.5 focus:ring-2 focus:ring-primary focus:border-primary" />
        </div>
        <div class="flex items-center gap-2">
            <label class="text-sm text-gray-600">إلى تاريخ</label>
            <input type="date" wire:model.live="dateTo"
                class="text-sm border border-gray-300 rounded-lg px-3 py-1.5 focus:ring-2 focus:ring-primary focus:border-primary" />
        </div>
        @if ($dateFrom || $dateTo)
            <button type="button" wire:click="clearFilters"
                class="text-sm text-red-600 hover:text-red-700 hover:underline">
                مسح الفلتر
            </button>
        @endif
        <span class="text-sm text-gray-500 mr-auto">
            {{ $total }} معاملة
        </span>
    </div>

    {{-- Loading --}}
    <div wire:loading wire:target="updatedDateFrom,updatedDateTo" class="flex items-center justify-center py-8">
        <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-primary"></div>
    </div>

    {{-- Empty State --}}
    @if ($total === 0)
        <div class="text-center py-12 text-gray-500">
            <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <p class="text-lg font-medium">لا توجد معاملات</p>
        </div>
    @else
        {{-- Table --}}
        <div class="overflow-x-auto bg-white rounded-xl border border-gray-200">
            <table class="w-full text-sm" role="grid" aria-label="كشف الحساب">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">#</th>
                        <th scope="col" class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">التاريخ</th>
                        <th scope="col" class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">الوصف</th>
                        <th scope="col" class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">مدين</th>
                        <th scope="col" class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">دائن</th>
                        <th scope="col" class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">المستخدم</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($transactions as $index => $row)
                        <tr class="hover:bg-gray-50 transition-colors" tabindex="0"
                            aria-rowindex="{{ $index + 1 }}" role="row">
                            <td class="px-4 py-3 text-gray-700">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 text-gray-700 whitespace-nowrap">{{ $row['date'] }}</td>
                            <td class="px-4 py-3 text-gray-700">{{ $row['description'] }}</td>
                            <td class="px-4 py-3 text-gray-700 whitespace-nowrap">
                                @if ($row['debit'] !== '—')
                                    <span class="text-green-600 font-medium">{{ $row['debit'] }}</span>
                                @else
                                    —
                                @endif
                            </td>
                            <td class="px-4 py-3 text-gray-700 whitespace-nowrap">
                                @if ($row['credit'] !== '—')
                                    <span class="text-red-600 font-medium">{{ $row['credit'] }}</span>
                                @else
                                    —
                                @endif
                            </td>
                            <td class="px-4 py-3 text-gray-600">{{ $row['user'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
