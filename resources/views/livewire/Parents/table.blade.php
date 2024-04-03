
<div class="flex justify-between mb-4">
    <h4 class="card-title">{{ trans('Parents.title') }}</h4>
    <button class="btn btn-primary" type="button" wire:click='create_mode'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="feather feather-plus-square">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="12" y1="8" x2="12" y2="16"></line>
            <line x1="8" y1="12" x2="16" y2="12"></line>
        </svg>
        {{ trans('Parents.new') }}
    </button>
</div>
@include('livewire.Parents.search')
<div class="relative shadow-md table-responsive sm:rounded-lg">
    <table class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('Parents.Father_Name') }}</th>
                <th>{{ trans('Parents.Father_Phone') }}</th>
                <th>{{ trans('Parents.Mother_Name') }}</th>
                <th>{{ trans('Parents.Mother_Phone') }}</th>
                <th>{{ trans('Parents.Address') }}</th>
                <th>{{ trans('General.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data['parents'] as $parent)
                @include('livewire.Parents.table_row')
            @empty
                <div class="alert alert-info" role="alert">
                    <p>{{ trans('general.Msg') }}</p>
                </div>
            @endforelse
        </tbody>
    </table>
</div>
{{ $data['parents']->links() }}
