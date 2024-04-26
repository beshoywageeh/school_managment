@props(['name','type'])
<div class="w-full md:w-1/3">
    <label class="mb-1 label label-required" for="form-with-multiple-column-username">
        {{$slot}}
    </label>
<input class="input" name="{{$name}}" id="form-with-multiple-column-username" type="{{$type}}" placeholder=""
    {{$attributes}}>
    @error($name)
<div class="error-message">{{ $message }}</div>
    @enderror
</div>
