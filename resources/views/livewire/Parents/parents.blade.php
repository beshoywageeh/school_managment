<div>
    @include('backend.msg')
    <div class="card">
        <div class="card-body">
            @if ($show_table)
                @include('livewire.Parents.table')
            @else


                @if ($update_mode)
                <div class="flex items-center justify-between">
                    <h1>{{ trans('Parents.Edit') }}</h1>
                </div>
                <hr>
                    <form wire:submit="UpdateParent" id="form-with-multiple-column" class="max-w-full" action="">
                    @else
                    <div class="flex items-center justify-between">
                        <h1>{{ trans('Parents.New') }}</h1>
                    </div>
                    <hr>
                        <form wire:submit="NewParent" id="form-with-multiple-column" class="max-w-full" action="">
                @endif

                <!-- Father Info -->
                <div class="flex flex-col gap-4 my-4">
                    <h5 class="text-center">{{ trans('Parents.Father_Info') }}</h5>
                    <!-- Form Row: One -->
                    <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                        <!-- Form Column: Username -->
                        <x-input name='Father_Name' class='' data="Father_Name"
                            type='text'>{{ trans('Parents.Father_Name') }}</x-input>
                        <x-input name='Father_Phone' class='' data="Father_Phone"
                            type='text'>{{ trans('Parents.Father_Phone') }}</x-input>
                        <!-- Form Column: Father_Job -->
                        <x-input name='Father_Job' class='' data="Father_Job"
                            type='text'>{{ trans('Parents.Father_Job') }}</x-input>
                    </div>
                    <!-- Form Row: Two -->

                    <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                        <x-input name='Father_National_Id' class='' data="Father_National_Id"
                            type='text'>{{ trans('Parents.Father_National_Id') }}</x-input>
                        <x-input name='Father_Birth_Date' class="input-date" data="Father_Birth_Date"
                            type='date'>{{ trans('Parents.Father_Birth_Date') }}</x-input>
                        <x-input name='Father_Learning' class="" data="Father_Learning"
                            type='text'>{{ trans('Parents.Father_Learning') }}</x-input>
                    </div>
                </div>
                <hr>
                <!-- Mother Info -->
                <div class="flex flex-col gap-4 my-4">
                    <h5 class="text-center">{{ trans('Parents.Mother_Info') }}</h5>

                    <!-- Form Row: One -->
                    <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                        <!-- Form Column: Username -->
                        <x-input name='Mother_Name' class='' data="Mother_Name"
                            type='text'>{{ trans('Parents.Mother_Name') }}</x-input>
                        <x-input name='Mother_Phone' class='' data="Mother_Phone"
                            type='text'>{{ trans('Parents.Mother_Phone') }}</x-input>
                        <x-input name='Mother_Job' class='' data="Mother_Job"
                            type='text'>{{ trans('Parents.Mother_Job') }}</x-input>
                    </div>
                    <!-- Form Row: Two -->
                    <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                        <x-input name='Mother_National_Id' class='' data="Mother_National_Id"
                            type='text'>{{ trans('Parents.Mother_National_Id') }}</x-input>
                        <x-input name='Mother_Birth_Date' class='input-date' data="Mother_Birth_Date"
                            type='date'>{{ trans('Parents.Mother_Birth_Date') }}</x-input>
                    </div>
                </div>
                <hr>
                <!-- Other Info -->
                <div class="flex flex-col gap-4 my-4">
                    <h5 class="text-center">{{ trans('Parents.Other_Info') }}</h5>

                    <!-- Form Row: One -->
                    <div class="flex flex-col items-center w-full gap-4 md:flex-row">

                        <!-- Form Row: Two -->
                        <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                            <!-- Form Column: Father_Job -->
                            <div class="w-full md:w-1/2">
                                <label class="mb-1 label">{{ trans('Parents.Address') }}</label>
                                <textarea class="textarea" placeholder="{{ trans('Parents.Address') }}" wire:model.blur="Address"></textarea>
                            </div>
                            <div class="w-full md:w-1/2" wire:model.blur="Religion">

                                <select class="select">
                                    <option value="">{{ trans('Parents.Religion') }}</option>

                                    @php
                                        $religionOptions = [trans('Parents.Christian'), trans('Parents.Muslim')];
                                    @endphp

                                    @foreach ($religionOptions as $option)
                                        <option @selected($Religion == $option) value="{{ $option }}">
                                            {{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="flex items-center justify-end w-full gap-2">
                    <button class="btn btn-soft-secondary" type="button"
                        wire:click='create_mode'>{{ trans('General.Cancel') }}</button>
                    <button class="btn btn-primary">{{ trans('General.Submit') }}</button>
                </div>

        </div>
        </form>
        @endif
    </div>
</div>
