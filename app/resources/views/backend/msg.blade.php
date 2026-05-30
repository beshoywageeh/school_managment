@if ($errors->any())
    <div class="bg-red-50 border border-red-200 text-red-800 rounded-lg p-4 relative" role="alert">
        <div class="flex items-center gap-2 text-base font-medium">
            <i width="1em" height="1em" data-feather="alert-triangle"></i>
            <span> هناك بعض المشاكل في الادخال </span>
        </div>
        <div class="mt-3 font-normal ps-10">
            <ul class="px-4 space-y-1 list-disc" role="list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button class="absolute top-2 left-2 text-red-500 hover:text-red-700" type="button">
            <i width="16" height="16" data-feather="x"></i>
        </button>
    </div>
@endif
