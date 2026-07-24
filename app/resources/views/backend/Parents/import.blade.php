<x-modal id="Import_Excel" title="{{ trans('general.Import_Excel') }}" can="Parents-import_Excel" variant="info" size="sm" titleButton="{{ trans('general.Import_Excel') }}">
    <form action="{{ route('parents.import-excel') }}" method="POST" enctype="multipart/form-data" id="Import_Excel">
        @csrf
        <div class="p-6">
            <input accept=".xlsx, .xls" type="file" name="file" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary">
        </div>

    </form>
</x-modal>
