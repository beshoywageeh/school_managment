@props(['status'])

@if ($status)
    <div class="mb-4 p-4 rounded-lg bg-green-50 text-green-800 border border-green-200">
        {{ $status }}
    </div>
@endif
