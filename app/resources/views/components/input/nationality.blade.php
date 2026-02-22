<div class="col">
    <label for="nationality" class="">{{ trans('general.nationality') }}</label>
    <select id="nationality" class="custom-select select2" name="nationality" {{$attributes}}>
        <option value="" selected disabled>{{ trans('general.nationality') }}</option>
        @foreach(\App\Models\nationality::all() as $nationality)
            <option value="{{ $nationality->id }}" @selected(old('nationality'))>{{ $nationality->name }}</option>
        @endforeach
    </select>
    @error('nationality')
    <div class="mt-1 alert alert-danger">{{ $message }}</div>
    @enderror
</div>
