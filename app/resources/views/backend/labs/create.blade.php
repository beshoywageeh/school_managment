<div class="modal" id="lab_create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800">{{ trans('general.new') }}</h3>
                <button type="button" class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100" data-dismiss="modal">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('labs.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="p-6">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('labs.location') }}</label>
                        <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" list="location_list" name="location"
                            value="{{ old('location') }}" placeholder="{{ trans('labs.location') }}">
                        <datalist id="location_list">
                            @foreach ($labs_main as $lab)
                                <option value="{{ $lab->location }}">
                            @endforeach
                        </datalist>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="labs_list w-full text-sm">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 text-right font-medium text-gray-700"><strong>{{ trans('labs.name') }}</strong></th>
                                    <th class="py-2 px-4"></th>
                                </tr>
                            </thead>
                            <tbody data-repeater-list="list_labs">
                                <tr data-repeater-item>
                                    <td class="py-2 px-2">
                                        <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                                            value="{{ old('name') }}">
                                    </td>
                                    <td class="py-2 px-2">
                                        <button type="button" class="w-full px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600" data-repeater-delete>
                                            <svg class="w-5 h-5 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="py-2">
                                        <input class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium" data-repeater-create type="button"
                                            value="{{ trans('labs.new_labs') }}" />
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                    <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 font-medium" data-dismiss="modal">{{ trans('general.Cancel') }}</button>
                    <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>