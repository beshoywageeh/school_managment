<div class="modal fade" id="lab_create" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h6>{{ trans('general.new') }}</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('labs.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="row mb-30">
                        <div class="col">
                            <label for="">{{ trans('labs.location') }}</label>
                            <input class="form-control" list="location_list" name="location" value="{{ old('location') }}" placeholder="{{ trans('labs.location') }}">
                            <datalist id="location_list">
                                @foreach ($labs_main as $lab)
                                    <option value="{{ $lab->location }}">
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table labs_list table-bordered">
                            <thead>
                                <tr>
                                    <th><strong>{{ trans('labs.name') }}</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody data-repeater-list="list_labs">
                                <tr data-repeater-item>
                                    <td>
                                        <input type="text" name="name" class="form-control"
                                        value="{{ old('name') }}">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-block" data-repeater-delete ><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <input class="btn btn-primary btn-block" data-repeater-create type="button"
                                            value="{{ trans('labs.new_labs') }}" />
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
                        <button class="btn btn-secondary" data-dismiss="modal">{{ trans('general.Cancel') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
