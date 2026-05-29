<div class="mb-4">
    <label for="religion" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('general.religion') }}</label>
    <select id="religion" name="religion" {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white']) }}>
        <option value="" selected disabled>{{ trans('general.religion') }}</option>
        <option value="0">{{ trans('enums.christian') }}</option>
        <option value="1">{{ trans('enums.muslim') }}</option>
    </select>
    @error('religion')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
