@extends('layouts.app')
@section('title')
{{trans('Sidebar.fund_account')}}
@endsection
@section('content')

        <div class="mb-4 row">
            <div class="col-md-12">
                <livewire:fund-account.fund-account-index/>
            </div>
        </div>
@endsection
