<div class="col">
    <label for="gender" class="">{{ trans('general.std_status') }}</label>
    <select id="gender" class="custom-select" name="std_status" {{$attributes}}>
        <option value="" selected>{{ trans('general.std_status') }}</option>
        @foreach(\App\Enums\Student_Status::cases() as $std_status)
            <option value="{{ $std_status->value }}" @selected(old('std_status', $std_status->value) == $std_status->value)>{{ $std_status->lang() }}</option>
        @endforeach
    </select>
    @error('std_status')
    <div class="mt-1 alert alert-danger">{{ $message }}</div>
    @enderror
</div>
