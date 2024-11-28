@extends('layouts.master')
@section('content')
    <div class="container-fluid mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"> महत्त्वपूर्ण लिङ्कहरू </li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
                    <i class="fa fa-clipboard"></i> महत्त्वपूर्ण लिङ्कहरू
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>क्र.सं</th>
                            <th>कार्यालयको नाम</th>
                            <th>लिंक</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($importantLinks as $importantLink)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$importantLink->title}}</td>
                                <td>
                                    <a href="{{$importantLink->url}}" target="_blank">
                                        {{$importantLink->url}}
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
