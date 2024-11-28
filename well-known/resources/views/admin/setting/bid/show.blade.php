@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">बोलपत्र दरखास्त फारम</h1>
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header text-center bg-primary text-white">
                <h3 class="card-title text-white">विवरण</h3>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-4"><strong>आर्थिक वर्ष:</strong></div>
                    <div class="col-md-8">{{ $bid->fiscalYear->year ?? 'N/A' }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4"><strong>खरिदकर्ताको नाम:</strong></div>
                    <div class="col-md-8">{{ $bid->buyer_name }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4"><strong>ठेगाना:</strong></div>
                    <div class="col-md-8">{{ $bid->address }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4"><strong>आयकर दर्ता नं:</strong></div>
                    <div class="col-md-8">{{ $bid->tax }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4"><strong>मूल्य अभिवृद्धि कर :</strong></div>
                    <div class="col-md-8">{{ $bid->vat }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4"><strong>लट नं:</strong></div>
                    <div class="col-md-8">{{ $bid->lot }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4"><strong>फोन नं:</strong></div>
                    <div class="col-md-8">{{ $bid->phone }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4"><strong>इमेल:</strong></div>
                    <div class="col-md-8">{{ $bid->email }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4"><strong>निकायको नाम:</strong></div>
                    <div class="col-md-8">{{ $bid->bidOffice->name ?? 'N/A' }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title text-center text-white">कागजातहरु</h3>
            </div>
            <div class="card-body">
                @if($bid->bidFiles->isEmpty())
                    <p>कागजातहरु उपलब्ध छैन | </p>
                @else
                    <ul class="list-group">
                        @foreach($bid->bidFiles as $file)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><strong>{{ $file->title }}</strong></span>
                                <a href="{{ asset('storage/' . $file->file) }}" download="{{ $file->title }}" class="btn btn-outline-primary btn-sm">
                                    Download
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>

    </div>
@endsection
