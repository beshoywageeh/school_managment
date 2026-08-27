<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
        <h5 class="text-lg font-semibold text-gray-800">{{ trans('Sidebar.FundAccount') }}</h5>
        <div class="w-56">
            <input type="date" wire:model.live.debounce.500ms="date"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
        </div>
    </div>

    <div class="p-6">
        @if (session()->has('success'))
            <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                <h5 class="text-sm font-semibold text-green-700">{{ session('success') }}</h5>
            </div>
        @endif

        <div class="text-center mb-6">
            <h4 class="text-base font-semibold text-gray-700">{{ $date }}</h4>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase w-12">#</th>
                        <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.date') }}</th>
                        <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fund_account.credit') }}</th>
                        <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fund_account.debit') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($accounts as $account)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3 text-center text-gray-500">{{ $loop->index + 1 }}</td>
                            <td class="px-4 py-3 text-start text-gray-600">{{ $account->date }}</td>
                            <td class="px-4 py-3 text-start text-green-700 font-medium">{{ Number::currency($account->Credit, config('school.currency')) }}</td>
                            <td class="px-4 py-3 text-start text-red-600 font-medium">{{ Number::currency($account->Debit, config('school.currency')) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-12 text-center text-gray-400">{{ trans('general.noDataToShow') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <div class="bg-green-50 border border-green-200 rounded-xl p-4 text-center">
                <h5 class="text-sm font-medium text-green-700">{{ trans('fund_account.total_credit') }}</h5>
                <p class="text-lg font-bold text-green-800 mt-1">{{ Number::currency($accounts->sum('Credit'), config('school.currency')) }}</p>
            </div>
            <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4 text-center">
                <h5 class="text-sm font-medium text-yellow-700">{{ trans('fund_account.total_debit') }}</h5>
                <p class="text-lg font-bold text-yellow-800 mt-1">{{ Number::currency($accounts->sum('Debit'), config('school.currency')) }}</p>
            </div>
            <div class="bg-red-50 border border-red-200 rounded-xl p-4 text-center">
                <h5 class="text-sm font-medium text-red-700">{{ trans('fund_account.grand_total') }}</h5>
                <p class="text-lg font-bold text-red-800 mt-1">{{ Number::currency($accounts->sum('Debit') - $accounts->sum('Credit'), config('school.currency')) }}</p>
            </div>
        </div>
    </div>
</div>
