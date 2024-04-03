<div>
    <div class="card">
        <div class="card-body">
            <div class="flex justify-between mb-4">
                <h4 class="card-title">{{ trans($page . '.title') }}</h4>
                {{ $button }}
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
