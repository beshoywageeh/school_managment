<div class="col">
    <label for="religion" class="">{{ trans('general.religion') }}</label>
    <select id="religion" class="custom-select" name="religion" {{$attributes}}>
        <option value="" selected disabled>{{ trans('general.religion') }}</option>
        @foreach(\App\Enums\user_religion
        ::cases() as $religion)
            <option value="{{ $religion->value }}" @selected(old('gender', $religion->value) == $religion->value)>{{ $religion->lang() }}</option>
        @endforeach
    </select>
    @error('religion')
    <div class="mt-1 alert alert-danger">{{ $message }}</div>
    @enderror
</div>
