@extends('frontend.sub-division.index')
@section('subDivisionContent')
    <div class="container-fluid mt-2">
        <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
            <i class="fa fa-newspaper-o"></i> सूचना / प्रकाशन
        </div>
        <div class="table-responsive mt-2">
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
                @foreach($subDivision->subDivisionDocuments as $document)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$document->title}}</td>
                        <td>{{$document->subDivisionDocumentCategory->title ?? ''}}</td>
                        <td>{{$document->date}}</td>
                        <td>{{$document->publisher}}</td>
                        <td>
                            <a href="{{route('subDivision.documentDetail',[$subDivision->slug,$document])}}"
                               class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i> View Details
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
