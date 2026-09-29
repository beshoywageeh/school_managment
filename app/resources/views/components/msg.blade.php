@if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-800 rounded-lg p-4 relative" role="alert">
        <div class="flex items-center gap-2 text-base font-medium">
            <i width="1em" height="1em" data-feather="alert-triangle"></i>

        </div>
        <div class="mt-3 font-normal ps-10">
            <p>{{ session('success') }}</p>
        </div>
        <button class="absolute top-2 left-2 text-green-500 hover:text-red-700" type="button">
            <i width="16" height="16" data-feather="x"></i>
        </button>
    </div>
@elseif(session('error'))
    <div class="bg-red-50 border border-red-200 text-red-800 rounded-lg p-4 relative" role="alert">
        <div class="flex items-center gap-2 text-base font-medium">
            <i width="1em" height="1em" data-feather="alert-triangle"></i>

        </div>
        <div class="mt-3 font-normal ps-10">
            <p>{{ session('error') }}</p>
        </div>
        <button class="absolute top-2 left-2 text-red-500 hover:text-red-700" type="button">
            <i width="16" height="16" data-feather="x"></i>
        </button>
    </div>
    @elseif (session('info'))

    <div class="bg-blue-50 border border-blue-200 text-blue-800 rounded-lg p-4 relative" role="alert">
        <div class="flex items-center gap-2 text-base font-medium">
            <i width="1em" height="1em" data-feather="info"></i>

        </div>
        <div class="mt-3 font-normal ps-10">
            <p>{{ session('info') }}</p>
        </div>
        <button class="absolute top-2 left-2 text-blue-500 hover:text-red-700" type="button">
            <i width="16" height="16" data-feather="x"></i>
        </button>
    </div>
    @else
    <p>{{ session('default') }}</p>
@endif

