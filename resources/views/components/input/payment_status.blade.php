<div class="col">
<label for="gender" class="">{{ trans('general.payment_status') }}</label>
    <select id="worker_type" class="form-control" name="type" {{$attributes}}>
        <option value="" selected>{{ trans('general.payment_status') }}</option>
        @foreach(\App\Enums\Payment_Status::cases() as $pay)
            <option value="{{ $pay->value }}" @selected(old('type', $pay->value) == $pay->value)>{{ $pay->lang() }}</option>
        @endforeach
    </select>
</div>
