@extends('layouts.app')
@section('title')
    {{ trans('Sidebar.FundAccount') }}
@endsection
@section('content')
    <livewire:fund-account.fund-account-index />
@endsection
