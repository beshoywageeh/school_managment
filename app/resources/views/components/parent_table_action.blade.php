<x-dropdown-table :buttonText="trans('general.buttons.action')" :items="[
    [
        'type'=>'link',
        'url' => route('parents.destroy', $id),
        'text' => trans('general.buttons.delete'),
        'icon' => 'ti-trash',
        'onclick' => 'confirmation(event)',
        'can'=>'parents-delete'
    ],
    [
        'type'=>'link',
        'url' => route('parents.show', $id),
        'text' => trans('general.buttons.view'),
        'icon' => 'ti-info-alt',
        'can'=>'parents-info'
    ],
    [
        'type'=>'link',
        'url' => route('parents.edit', $id),
        'text' => trans('general.buttons.edit'),
        'icon' => 'ti-pencil',
        'can' => 'parents-edit',
    ],
]" />
