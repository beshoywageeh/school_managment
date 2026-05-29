@extends('layouts.app')
@section('title')
    {{ trans('Sidebar.fund_account') }}
@endsection
@section('content')
    <livewire:fund-account.fund-account-index />
@endsection