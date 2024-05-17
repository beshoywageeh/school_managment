@props(['name', 'type'])
<div class="w-full md:w-1/3">
    <label for="{{ $name }}" class="mb-1 label label-required">{{ $slot }}</label>
    <input
        {{ $attributes->class(['input', 'is-invalid' => $errors->has($name)])->merge(['name' => $name, 'id' => $name, 'type' => $type]) }}
        value="{{ old($name, $slot) ? old($name, $slot) : $slot }}">
    @error($name)
        <div class="mt-1 error-message">{{ $message }}</div>
    @enderror
</div>
