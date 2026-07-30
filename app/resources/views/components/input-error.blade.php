@props(['messages', 'id' => null])

@if ($messages)
    @foreach ((array) $messages as $message)
        <p {{ $id ? "id=$id" : '' }} class="mt-2 text-sm text-danger" role="alert">{{ $message }}</p>
    @endforeach
@endif
