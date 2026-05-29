@props(['messages'])

@if ($messages)
    @foreach ((array) $messages as $message)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @endforeach
@endif
