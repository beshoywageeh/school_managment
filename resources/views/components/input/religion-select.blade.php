<div class="w-full md:w-1/3">
    <label for="religion" class="mb-1 label label-required">{{ trans('general.gender') }}</label>
    <select id="gender" class="select" name="religion" {{$attributes}}>
        <option value="">{{ trans('general.religion') }}</option>
        @foreach(\App\Enums\user_religion
        ::cases() as $religion)
            <option value="{{ $religion->value }}" @selected(old('gender', $religion->value) == $religion->value)>{{ $religion->lang() }}</option>
        @endforeach
    </select>
</div>
