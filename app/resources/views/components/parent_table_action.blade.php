<x-dropdown-table :buttonText="trans('general.buttons.action')" :items="[
    [
        'type' => 'link',
        'url' => route('parents.destroy', $id),
        'text' => trans('general.buttons.delete'),
        'icon' => 'trash',
        'onclick' => 'confirmation(event)',
        'can' => 'parents-delete',
    ],
    [
        'type' => 'link',
        'url' => route('parents.show', $id),
        'text' => trans('general.buttons.view'),
        'icon' => 'information-circle',
        'can' => 'parents-info',
    ],
    [
        'type' => 'link',
        'url' => route('parents.edit', $id),
        'text' => trans('general.buttons.edit'),
        'icon' => 'pencil',
        'can' => 'parents-edit',
    ],
]" />
