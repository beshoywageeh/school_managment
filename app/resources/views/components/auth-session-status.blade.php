@props(['status'])

@if ($status)
    <div class="mb-4 p-4 rounded-lg bg-success/10 text-success border border-success/20">
        {{ $status }}
    </div>
@endif
