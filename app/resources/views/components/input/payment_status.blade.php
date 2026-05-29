<div class="mb-4">
    <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('general.payment_status') }}</label>
    <select id="worker_type" name="type" {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white']) }}>
        <option value="" selected>{{ trans('general.payment_status') }}</option>
        @foreach (\App\Enums\Payment_Status::cases() as $pay)
            <option value="{{ $pay->value }}" @selected(old('type', $pay->value) == $pay->value)>{{ $pay->lang() }}</option>
        @endforeach
    </select>
    @error('type')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
