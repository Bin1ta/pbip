@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Document Category</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#0">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#0">Documents</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Document Category
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <div class="form-elements-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <h6 class="mb-25">Input Fields</h6>
                    <form action="{{route('admin.subDivisionDocumentCategory.update',$subDivisionDocumentCategory)}}" method="POST"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="input-style-1">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="@error('title') is-invalid @enderror"
                                   placeholder="Title" value="{{old('title',$subDivisionDocumentCategory->title)}}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="
                          button-group
                          d-flex
                          justify-content-center
                          flex-wrap
                        ">
                                <button type="submit" class="main-btn w-100 primary-btn btn-hover m-2">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
                <!-- end card -->

            </div>

        </div>
        <!-- end row -->
    </div>
@endsection
