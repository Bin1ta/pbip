@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>कार्यालय विवरण</h2>
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
                            <li class="breadcrumb-item"><a href="{{route('admin.officeDetail.index')}}">कार्यालय विवरण
                                    लिस्ट</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                कार्यालय विवरण थप्नुहोस
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
        <form action="{{route('admin.officeDetail.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="title">शीर्षक</label>
                        <input type="text" id="title" name="title"
                               placeholder="शीर्षक" value="{{old('title')}}">
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="slug">Slug</label>
                        <input type="text" id="slug" name="slug"
                               placeholder="Slug" value="{{old('slug')}}">
                        @error('slug')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="position">Position</label>
                        <input type="number" id="position" name="position" value="{{old('position')}}">
                        @error('position')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-style-1">
                        <div class="select-position">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="">- - छान्नुहोस् - -</option>
                                @foreach(config('types') as $type)
                                    <option value="{{$type}}">{{$type}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('type')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-style-1">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="summernote"></textarea>
                        @error('description')
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
    @push('script')
        {{-- summernote js --}}
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.summernote').summernote({
                    placeholder: 'Description',
                    tabsize: 2,
                    height: 300
                });
            });
        </script>
    @endpush

@endsection
