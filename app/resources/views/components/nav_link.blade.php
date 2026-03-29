@props(['active', 'image', 'icon'])

<li @class(['sidebar-menu', 'active-menu' => $active])>
    <a {{ $attributes }}>
        @isset($image)
            <img class="img-fluid" width="25" height="25" src="{{ $image }}" alt="{{ $slot }}" />
        @endisset
        @isset($icon)
            <i class="{{ $icon }} fa-lg fa-fw"></i>
        @endisset
        <span class="mx-3 right-nav-text">{{ $slot }}</span>
    </a>
</li>
