@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>बोलपत्र सेटिंग</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">ड्यासबोर्ड</a>
                            </li>
                            <li class="breadcrumb-item">बोलपत्र सेटिंग</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="card-style mb-30">
        <form action="{{ route('admin.bid-setting.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset class="border p-2 mb-2">
                <legend class="font-16 text-primary">
                    <strong>विवरण</strong>
                </legend>
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <h5>
                            <label for="is_bid_open" class="form-label">
                                बोलपत्र खुल्ला भएको वा नभएको? *
                            </label>
                        </h5>
                        <div class="d-flex">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="is_bid_open" id="is_bid_open1"
                                       value="1" {{ old('is_bid_open', $bidSetting->is_bid_open ?? '') == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_bid_open1">भएको</label>
                            </div>
                            <div class="form-check mx-3">
                                <input type="radio" class="form-check-input" name="is_bid_open" id="is_bid_open2"
                                       value="0" {{ old('is_bid_open', $bidSetting->is_bid_open ?? '') == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_bid_open2">नभएको</label>
                            </div>
                        </div>
                        @error('is_bid_open')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
