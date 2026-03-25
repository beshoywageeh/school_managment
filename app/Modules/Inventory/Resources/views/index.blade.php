@extends('inventory::layouts.master')

@section('content')
<div class="row">
    <div class="col">
        <div class="mb-4 card">
            <div class="m-2">

            <livewire:inventory.InventoryTable/>
            </div>
        </div>
    </div>
</div>

@endsection
