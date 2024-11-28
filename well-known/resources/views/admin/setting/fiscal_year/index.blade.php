@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2> आर्थिक वर्ष</h2>
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
                            <li class="breadcrumb-item"><a href="#0">बोलपत्र सेटिंग</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                               आर्थिक वर्ष
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
                    <form action="{{route('admin.fiscal-year.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-style-1">
                            <label for="year">  आर्थिक वर्ष</label>
                            <input type="text" id="year" name="year" class="@error('year') is-invalid @enderror"
                                   placeholder=" आर्थिक वर्ष" value="{{old('year')}}">
                            @error('year')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- end row -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h6 class="mb-10">  आर्थिक वर्षको सुचि</h6>

                <div class="table-wrapper table-responsive table-hover">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h6>SN</h6></th>
                            <th><h6>Title</h6></th>
                            <th><h6>Action</h6></th>
                        </tr>
                        <!-- end table row-->
                        </thead>
                        <tbody>
                        @foreach($fiscalYears as $fiscalYear)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td class="min-width">
                                    <p>{{$fiscalYear?->year}}</p>
                                </td>

                                <td>
                                    <div class="action">
                                        <a href="{{route('admin.fiscal-year.edit', $fiscalYear)}}" class="text-info">
                                            <i class="lni lni-pencil"></i>
                                        </a>
                                        <form action="{{route('admin.fiscal-year.destroy',$fiscalYear)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-danger show_confirm" type="submit">
                                                <i class="lni lni-trash-can"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection
