@extends('layouts.master')
@section('content')

    <div class="container-fluid mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{$documentCategory->title}}</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
            <i class="fa fa-newspaper-o"></i> {{$documentCategory->title}}
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>क्र.सं</th>
                <th>शीर्षक</th>
                <th>समुह</th>
                <th>प्रकाशित मिति</th>
                <th>प्रकाशक:</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @forelse($documentCategory->documents as $document)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$document->title}}</td>
                        <td>{{$document->documentCategory->title ?? ''}}</td>
                        <td>
                            {{$document->published_date ? $document->published_date->toDateString() : ''}}
                        </td>
                        <td>{{$document->publisher}}</td>
                        <td>
                            <a href="{{route('documentDetail',$document->slug)}}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i> View Details
                            </a>
                        </td>
                    </tr>
                @empty
                    @foreach($documentCategory->mainDocuments as $mainDocument)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$mainDocument->title}}</td>
                        <td>{{$mainDocument->mainDocumentCategory->title ?? ''}}</td>
                        <td>
                            {{$mainDocument->published_date ? $mainDocument->published_date->toDateString() : ''}}
                        </td>
                        <td>{{$mainDocument->publisher}}</td>
                        <td>
                            <a href="{{route('documentDetail',$mainDocument->slug)}}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i> View Details
                            </a>
                        </td>
                    </tr>
                    @endforeach
                @endforelse
            </tbody>
        </table>
        </div>
    </div>
@endsection
