<!-- resources/views/livewire/schedule-management.blade.php -->

<div class="card">
    <div class="card-header">
        <!-- أدوات التحكم -->
        <div class="row">
            <div class="col">
                <h5>{{ trans('Sidebar.fund_account') }}</h5>
            </div>
            <div class="col">
                <input type="date" wire:model.live.debounce500ms="date" class="form-control">
            </div>
        </div>

    </div>
    <div class="card-body">
        @error('success')
            <div class="bg-white border alert border-success alert-dismissible fade show" role="alert">
                <h5 class='text-success'><strong>{{ $message }}</strong></h5>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <div class="table-responsive">
            <div class="text-center">
                <h4>{{ $date }}</h4>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><strong>{{ trans('general.date') }}</strong></th>
                        <th><strong>{{ trans('fund_account.credit') }}</strong></th>
                        <th><strong>{{ trans('fund_account.debit') }}</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($accounts as $account)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $account->date }}</td>
                            <td>{{ Number::currency($account->Credit, 'EGP') }}</td>
                            <td>{{ Number::currency($account->Debit, 'EGP') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">{{ trans('general.noDataToShow') }}</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
        <div class="row">
            <div class="col alert alert-success">
                <h5>{{trans('fund_account.total_credit')}} {{Number::currency($accounts->sum('Credit'),'EGP')}}</h5>
            </div>
            <div class="col alert alert-warning">
                <h5>{{trans('fund_account.total_debit')}} {{Number::currency($accounts->sum('Debit'),'EGP')}}</h5>
            </div>
            <div class="col alert alert-danger">
                <h5>{{trans('fund_account.grand_total')}} {{Number::currency($accounts->sum('Debit')-$accounts->sum('Credit'),'EGP')}}</h5>
            </div>
        </div>
    </div>





</div>
