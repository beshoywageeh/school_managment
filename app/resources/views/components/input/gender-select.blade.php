@props(['selected' => null])
@php
    $id = $attributes->get('id', 'gender-' . \Illuminate\Support\Str::random(6));
@endphp

<div>
    <x-input-label for="{{ $id }}">{{ trans('general.gender') }}</x-input-label>
    <select id="{{ $id }}" name="gender" {{ $attributes->merge(['class' => 'w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all']) }}>
        <option value="">{{ trans('general.choose', ['value' => '']) }}</option>
        @foreach (\App\Enums\UserGender::cases() as $gender)
            <option value="{{ $gender->value }}" {{ old('gender', $selected) == $gender->value ? 'selected' : '' }}>{{ $gender->lang() }}</option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('gender')" />
</div>
