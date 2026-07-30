@props(['type' => 'text', 'name', 'value' => '', 'required' => false, 'autofocus' => false, 'autocomplete' => ''])

<input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}"
    @if ($required) required @endif @if ($autofocus) autofocus @endif
    autocomplete="{{ $autocomplete }}"
    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
