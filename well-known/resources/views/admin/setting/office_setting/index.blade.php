@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>कार्यालय सेटिंग</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">ड्यासबोर्ड</a>
                            </li>
                            <li class="breadcrumb-item">
                                कार्यालय सेटिंग
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <div class="card-style mb-30">
        <form action="{{route('admin.officeSetting.update',$officeSetting)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="office_name">कार्यालयको नाम *</label>
                        <input type="text" id="office_name" name="office_name"
                               placeholder="कार्यालयको नाम" value="{{old('office_name',$officeSetting->office_name)}}">
                        @error('office_name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="office_address">कार्यालय ठेगाना *</label>
                        <input type="text" id="office_address" name="office_address"
                               placeholder="कार्यालय ठेगाना" value="{{old('office_address',$officeSetting->office_address)}}">
                        @error('office_address')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="office_phone">फोन नं. *</label>
                        <input type="text" id="office_phone" name="office_phone"
                               placeholder="फोन नं." value="{{old('office_phone',$officeSetting->office_phone)}}">
                        @error('office_phone')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="office_email">इमेल</label>
                        <input type="text" id="office_email" name="office_email"
                               placeholder="इमेल" value="{{old('office_email',$officeSetting->office_email)}}">
                        @error('office_email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-style-1">
                        <label for="cover_photo">Cover Photo</label>
                        <span>
                            <img src="{{asset('storage/'.$officeSetting->cover_photo)}}" width="90" alt="Cover Photo">
                        </span>
                        <input type="file" id="cover_photo" name="cover_photo">
                        @error('cover_photo')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-style-1">
                        <label for="en_header">English Header</label>
                        <span>
                            <img src="{{asset('storage/'.$officeSetting->en_header)}}" width="90" alt="English Header">
                        </span>
                        <input type="file" id="en_header" name="en_header">
                        @error('en_header')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-style-1">
                        <label for="ne_header">Nepali Header</label>
                        <span>
                            <img src="{{asset('storage/'.$officeSetting->ne_header)}}" width="90" alt="Nepali Header">
                        </span>
                        <input type="file" id="ne_header" name="ne_header">
                        @error('ne_header')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-style-1">
                        <label for="chief_id">कार्यालय प्रमुख</label>
                        <select name="chief_id" id="chief_id" class="form-control">
                            <option value="">- - छान्नुहोस् - -</option>
                            @foreach($employees as $employee)
                                <option value="{{$employee->id}}" {{$officeSetting->chief_id==$employee->id ? 'selected' : ''}}>{{$employee->name}}</option>
                            @endforeach
                        </select>
                        @error('chief_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-style-1">
                        <label for="information_officer_id">सूचना अधिकारी</label>
                        <select name="information_officer_id" id="information_officer_id" class="form-control">
                            <option value="">- - छान्नुहोस् - -</option>
                            @foreach($employees as $employee)
                                <option value="{{$employee->id}}" {{$officeSetting->information_officer_id==$employee->id ? 'selected' : ''}}>{{$employee->name}}</option>
                            @endforeach
                        </select>
                        @error('information_officer_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-style-1">
                        <label for="document_list_type">कागजात सूची प्रकार</label>
                        <select name="document_list_type" id="document_list_type" class="form-control">
                            <option value="card" {{$officeSetting->document_list_type=="card" ? 'selected' : ''}}>Card</option>
                            <option value="list" {{$officeSetting->document_list_type=="list" ? 'selected' : ''}}>List</option>
                        </select>
                        @error('information_officer_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-style-1">
                        <label for="map_iframe">Map Url</label>
                        <textarea name="map_iframe" id="map_iframe" cols="30" rows="4" placeholder="Map Url">{{$officeSetting->map_iframe}}</textarea>
                        @error('map_iframe')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-style-1">
                        <label for="facebook_iframe">Facebook Url</label>
                        <textarea name="facebook_iframe" id="facebook_iframe" cols="30" rows="4" placeholder="Facebook Url">{{$officeSetting->facebook_iframe}}</textarea>
                        @error('facebook_iframe')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-style-1">
                        <label for="twitter_iframe">Twitter Url</label>
                        <textarea name="twitter_iframe" id="twitter_iframe" cols="30" rows="4" placeholder="Twitter Url">{{$officeSetting->twitter_iframe}}</textarea>
                        @error('twitter_iframe')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
