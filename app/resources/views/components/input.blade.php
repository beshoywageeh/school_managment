@props(['name', 'type', 'value' => ''])
@php
    $hasError = $errors->has($name);
    $errorId = $name . '-error';
@endphp
<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $slot }}</label>
    <input
        {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all', 'border-danger focus:border-danger focus:ring-danger/20' => $hasError])->merge(['name' => $name, 'id' => $name, 'type' => $type, 'value' => $value]) }}
        @if ($hasError) aria-invalid="true" aria-describedby="{{ $errorId }}" @endif>
    @error($name)
        <p id="{{ $errorId }}" class="mt-2 text-sm text-danger" role="alert">{{ $message }}</p>
    @enderror
</div>
