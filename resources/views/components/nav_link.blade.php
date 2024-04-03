@props(['active',"image"])
<li>
    <a {{ $attributes }} @class(['sidebar-menu', 'active' => $active])>
        <span class="sidebar-menu-icon">
            <div class="avatar-sm">
                <img class="avatar-img group-focus-within:ring group-focus-within:ring-primary-500"
                    src="{{$image}}" alt="{{ $slot }}" />
            </div>
        </span>
        <span class="sidebar-menu-text">{{ $slot }}</span>
    </a>
</li>
