@extends('layouts.master')
@section('content')
    <div class="container-fluid mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"> कर्मचारीहरु</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid mt-2">
        <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
            <i class="fa fa-users"></i> कर्मचारी विवरण<h6 class="content_title">  <span class="pull-right"></span>
            </h6>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="team_card" class="card-container">
                    <img class="rounded" src="{{$employees->first()->photo ?? ''}}" height="120" weight="120"
                         alt="{{$employees->first()->name ?? ''}}">
                    <p>{{$employees->first()->name ?? ''}}</p>
                    <p>{{$employees->first()->designation->title ?? ''}}</p>
                    <p>{{$employees->first()->phone ?? ''}}</p>
                    <p>{{$employees->first()->email ?? ''}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($employees->skip(1) as $employee)
            <div class="col-md-3">
                <div class="card-container">
                    <img class="rounded" src="{{$employee->photo}}" height="120" width="120"
                         alt="{{$employee->name ?? ''}}">
                    <p>{{$employee->name ?? ''}}</p>
                    <p>{{$employee->designation->title ?? ''}}</p>
                    <p>{{$employee->phone ?? ''}}</p>
                    <p>{{$employee->email ?? ''}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
