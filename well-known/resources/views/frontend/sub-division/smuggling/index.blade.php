@extends('frontend.sub-division.index')
@section('subDivisionContent')
    <div class="container-fluid mt-2">
        <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
            <i class="fa fa-newspaper-o"></i> तस्करी
        </div>
        <div class="container-fluid mt-2">
            <div class="row mt-3">
                @foreach($subDivision->smugglings as $smuggling)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('storage/'.$smuggling->files->first()->url)}}" class="card-img-top" alt="{{$smuggling->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$smuggling->title}}</h5>
                            <p class="card-text">{{\Illuminate\Support\Str::words($smuggling->description,60,"..")}}</p>
                        </div>
                        <div class="card-body">
                            <a href="{{route('subDivision.smugglingDetail',[$subDivision->slug,$smuggling])}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
