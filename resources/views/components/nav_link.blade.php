@props(['active', 'image'])

<li @class(['sidebar-menu', 'active' => $active])>
    <a {{ $attributes }}>
        <img class="img-fluid" width="25" height="25" src="{{ $image }}" alt="{{ $slot }}" />
        <span class="right-nav-text mx-3">{{ $slot }}</span>
    </a>
</li>
