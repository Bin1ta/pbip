@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row" style="padding: 5px;">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">{{ $keyword }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="">{{ $documents->count() }} Matching results for {{ $keyword }}</div>
            </div>

            <div class="row" style="padding: 5px;">
                <div class="col-md-12">
                    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
                        Documents
                        <h6 class="content_title">
                            <span class="pull-right"></span>
                        </h6>
                    </div>
                    <div class="notice_list border top">
                        <table id="example" class="table table-bordered table-condensed table-responsive table-hover">

                            <thead>

                                <tr class="success">
                                    <th width="7%">क्र.सं</th>
                                    <th width="50%">शीर्षक</th>
                                    <th width="15%">प्रकाशित मिति</th>
                                    <th width="15%">प्रकाशक:</th>
                                    <th width="13%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $document)
                                    <tr class="ng-star-inserted">

                                        <td> {{ $loop->iteration }}</td>
                                        <td>{{ $document->title }} </td>
                                        <td>
                                            <small>{{ $document->published_date->toDateString() }}</small>
                                        </td>
                                        <td>{{ $document->publisher }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="#" target="blank">
                                                <i class="fa fa-eye"></i> View
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endsection
