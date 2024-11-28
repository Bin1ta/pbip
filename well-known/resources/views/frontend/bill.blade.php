@extends('layouts.master')

@section('content')
    <div class="container-fluid mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"> बिल सर्बजनिकरण</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
                    <i class="fa fa-clipboard" ></i> बिल सर्बजनिकरण
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>क्र.सं</th>
                            <th> बजेट नं.</th>
                            <th> खर्च शिर्षक</th>
                            <th>खरिद प्रक्रिया</th>
                            <th>पान न.</th>
                            <th>बिल मिति</th>
                            <th>रसिद मिति</th>
                            <th>रकम</th>
                            <th>विवरण</th>
                            <th>कैफियत</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bills as $bill)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$bill->budget_no}}</td>
                            <td>{{$bill->expense_head}}</td>
                            <td>{{$bill->buying_process}}</td>
                            <td>{{$bill->pan_no}}</td>
                            <td>{{$bill->bill_date ? $bill->bill_date->toDateString() : ''}}</td>
                            <td>{{$bill->receipt_date ? $bill->receipt_date->toDateString() : ''}}</td>
                            <td>रु. {{$bill->amount}}</td>
                            <td>{{$bill->description}}</td>
                            <td>{{$bill->remarks}}</td>
                            <td>
                                <a href="{{asset('storage/'.$bill->bill_photo)}}" download="{{asset('storage/'.$bill->bill_photo)}}">
                                    <i class="fa fa-download"></i> Bill File
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
