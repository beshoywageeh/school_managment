@props(['name', 'value' => ''])
@php
    $hasError = $errors->has($name);
@endphp
<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $slot }}</label>
    <textarea
        {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all', 'border-danger focus:border-danger focus:ring-danger/20' => $hasError])->merge(['name' => $name, 'id' => $name, 'rows' => 4, 'aria-invalid' => $hasError ? 'true' : 'false', 'aria-describedby' => $hasError ? $name . '-error' : null]) }}>{{ $value }}</textarea>
    <x-input-error :messages="$errors->get($name)" :id="$name . '-error'" />
</div>
