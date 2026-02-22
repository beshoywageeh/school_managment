<div class="col">
    <label for="religion" class="">{{ trans('general.religion') }}</label>
    <select id="religion" class="custom-select" name="religion" {{ $attributes }}>
        <option value="" selected disabled>{{ trans('general.religion') }}</option>
        <option value="0">{{ trans('enums.christian') }}</option>
        <option value="1">{{ trans('enums.muslim') }}</option>

    </select>
    @error('religion')
        <div class="mt-1 alert alert-danger">{{ $message }}</div>
    @enderror
</div>
