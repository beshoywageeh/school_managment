@props(['name', 'type','value'=>''])
<div class="form-group">
    <label for="{{ $name }}">{{ $slot }}</label>
    <input
        {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)])->merge(['name' => $name, 'id' => $name, 'type' => $type, 'value' => $value]) }}
    >
    @error($name)
    <div class="mt-1 alert alert-danger">{{ $message }}</div>
    @enderror
</div>
