<div class="mb-4">
    <label for="religion" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('general.religion') }}</label>
    <select id="religion" name="religion" {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all bg-white']) }}>
        <option value="" selected disabled>{{ trans('general.religion') }}</option>
        <option value="christian">{{ trans('enums.christian') }}</option>
        <option value="muslim">{{ trans('enums.muslim') }}</option>
    </select>
    @error('religion')
        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
    @enderror
</div>
