@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="form-elements-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- input style start -->
                    <div class="card-style">

                        @if($bidSetting->is_bid_open == 1)
                            @livewire('bid-form')

@else
                            <h3 class="mt-4 text-center">!!! बोलपत्र दरखास्त फारम खुलेको छैन !!!</h3>
                        @endif




                </div>
                <!-- end card -->

            </div>

        </div>
        <!-- end row -->
    </div>
    </div>

@endsection
