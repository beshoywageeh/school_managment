<div class="modal fade"
     id="Import_Excel"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h6>{{ trans('general.Import_Excel') }}</h6>
                </div>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('employees.import_excel') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file"
                                   name="excel"
                                   multiple
                                   accept="application/csvm+json,application/xlsx"
                                   class="custom-file-input"
                                   id="inputGroupFile02">
                            <label class="custom-file-label"
                                   for="inputGroupFile02">{{trans('general.choose_file')}}</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">{{trans('general.upload')}}</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{asset('storage/attachments/upload_templates/Parents_Info.xlsx')}}"
                       download
                       class="btn btn-primary">{{trans('general.download_form')}}</a>
                    <button class="btn btn-success"
                            type="submit">{{ trans('general.Submit') }}</button>
                    <button class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('general.Cancel') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
