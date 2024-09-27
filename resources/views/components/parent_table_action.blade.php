<x-dropdown-table :buttonText="trans('general.actions')" :items="[
    [
        'url' => route('parents.destroy', $row->id),
        'text' => trans('general.delete'),
        'icon' => 'ti-trash',
        'onclick' => 'confirmation(event)',
        'can'=>'parents-delete'
    ],
    [
        'url' => route('parent.show', $row->id),
        'text' => trans('general.info'),
        'icon' => 'ti-info-alt',
        'can'=>'parents-info'
    ],
    [
        'url' => route('parents.edit', $row->id),
        'text' => trans('general.edit'),
        'icon' => 'ti-pencil',
        'can' => 'parents-edit',
    ],
]" />
