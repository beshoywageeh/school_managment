@props(['name', 'type'])
<div class="form-group">
    <label for="{{ $name }}">{{ $slot }}</label>
    <input
        {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)])->merge(['name' => $name, 'id' => $name, 'type' => $type, 'value' => old($name, $slot) ? old($name, $slot) : $slot]) }}
        >
    @error($name)
        <div class="mt-1 error-message">{{ $message }}</div>
    @enderror
</div>
