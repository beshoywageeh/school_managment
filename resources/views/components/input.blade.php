@props(['name','type','class','data'])
<div class="w-full md:w-1/3">
    <label class="mb-1 label label-required" for="form-with-multiple-column-username">
        {{$slot}}
    </label>
    <input class="input {{$class}}" wire:model.blur="{{$data}}" id="form-with-multiple-column-username"
        type="{{$type}}"
        placeholder="{{$slot}}">
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
