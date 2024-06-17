@extends('layouts.app')
@section('title')
    {{ trans('promotions.title') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ trans('promotions.title') }}</h4>
                        </div>
                        <div class="col text-md-right">
                            @can('promotion-create')
                                <a href="{{ route('promotion.create') }}"
                                   class="btn btn-success">
                                    <i class="ti-plus"></i>
                                    {{ trans('general.new') }}
                                </a>
                            @endcan
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('promotion-list')
                            <table class="table table-striped table-bordered"
                                   id="datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('promotions.student') }}</th>
                                    <th>{{ trans('promotions.from_gradename') }}</th>
                                    <th>{{ trans('promotions.from_classroom') }}</th>
                                    <th>{{ trans('promotions.to_gradename') }}</th>
                                    <th>{{ trans('promotions.to_classroom') }}</th>
                                    <th>{{ trans('general.actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($promotions as $promotion)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td>{{ $promotion->students->name }}</td>
                                        <td>{{$promotion->f_grade->name}}</td>
                                        <td> {{ $promotion->f_class->name }}</td>
                                        <td>{{ $promotion->t_grade->name }}</td>
                                        <td>{{ $promotion->t_class->name }}</td>
                                        <td>
                                            <x-dropdown-table :buttonText="trans('general.actions')"
                                                              :items="[
                                                [
                                                    'url' => route('promotions.destroy', $promotion->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can'=>'promotion-delete'
                                                ],

                                            ]"/>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9">{{ trans('general.Msg') }}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    @endpush
@endsection
