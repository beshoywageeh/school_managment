<div class="col">
    <label for="religion" class="">{{ trans('general.religion') }}</label>
    <select id="religion" class="form-control" name="religion" {{$attributes}}>
        <option value="" selected>{{ trans('general.religion') }}</option>
        @foreach(\App\Enums\user_religion
        ::cases() as $religion)
            <option value="{{ $religion->value }}" @selected(old('gender', $religion->value) == $religion->value)>{{ $religion->lang() }}</option>
        @endforeach
    </select>
</div>
