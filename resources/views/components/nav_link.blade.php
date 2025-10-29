@props(['active', 'image'])

<li @class(['sidebar-menu', 'active' => $active])>
    <a {{ $attributes }}>
        @isset($image)
        <img class="img-fluid" width="25" height="25" src="{{ $image }}" alt="{{ $slot }}" />
        @endisset
        <span class="mx-3 right-nav-text">{{ $slot }}</span>
    </a>
</li>
