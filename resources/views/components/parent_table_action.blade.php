<x-dropdown-table :buttonText="trans('general.actions')" :items="[
    [
        'tybe'=>'link',
        'url' => route('parents.destroy', $id),
        'text' => trans('general.delete'),
        'icon' => 'ti-trash',
        'onclick' => 'confirmation(event)',
        'can'=>'parents-delete'
    ],
    [
        'type'=>'link',
        'url' => route('parent.show', $id),
        'text' => trans('general.info'),
        'icon' => 'ti-info-alt',
        'can'=>'parents-info'
    ],
    [
        'type'=>'link',
        'url' => route('parents.edit', $id),
        'text' => trans('general.edit'),
        'icon' => 'ti-pencil',
        'can' => 'parents-edit',
    ],
]" />
