<div>
    <div class="mb-4">
        <div class="w-full md:w-1/3">
            <input type="text"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                placeholder="Search by Father or Student Name..." wire:model.live.debounce.300ms="search">
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            {{ trans('Parents.father-name') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            {{ trans('Parents.father-phone') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            {{ trans('Parents.father-job') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            {{ trans('student.name') }}</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">
                            {{ trans('general.buttons.action') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($students_parents as $parent)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $parent->Father_Name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $parent->Father_Phone }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $parent->Father_Job }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                @foreach ($parent->Students as $student)
                                    {{ $student->name }}<br>
                                @endforeach
                            </td>
                            <td class="px-6 py-4 text-center">
                                <x-parent_table_action :id="$parent->id" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $students_parents->links() }}
    </div>
</div>
