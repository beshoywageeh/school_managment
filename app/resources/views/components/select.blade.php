@props(['name', 'label' => ''])
@php
    $hasError = $errors->has($name);
    $errorId = $name . '-error';
@endphp
<div class="mb-4">
    @if ($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
    @endif
    <select
        {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all bg-white', 'border-danger focus:border-danger focus:ring-danger/20' => $hasError])->merge(['name' => $name, 'id' => $name]) }}
        @if ($hasError) aria-invalid="true" aria-describedby="{{ $errorId }}" @endif>
        {{ $slot }}
    </select>
    @error($name)
        <p id="{{ $errorId }}" class="mt-2 text-sm text-danger" role="alert">{{ $message }}</p>
    @enderror
</div>
