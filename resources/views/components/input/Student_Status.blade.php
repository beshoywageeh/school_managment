<div class="col">
    <label for="gender" class="">{{ trans('general.std_status') }}</label>
    <select id="gender" class="form-control" name="std_status" {{$attributes}}>
        <option value="" selected>{{ trans('general.std_status') }}</option>
        @foreach(\App\Enums\Student_Status::cases() as $std_status)
            <option value="{{ $std_status->value }}" @selected(old('std_status', $std_status->value) == $std_status->value)>{{ $std_status->lang() }}</option>
        @endforeach
    </select>
</div>
