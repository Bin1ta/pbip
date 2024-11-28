@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>बोलपत्र दरखास्त फारम</h2>
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
                                बोलपत्र दरखास्त फारम
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
                    <form action="" method="GET">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 input-style-1">
                                <label for="fiscal_year_id">आर्थिक वर्ष</label>
                                <select class="form-select" id="fiscal_year_id" name="fiscal_year_id">
                                    <option value="">आर्थिक वर्ष छान्नुहोस्</option>
                                    @foreach($fiscalYears as $fiscalYear)
                                        <option value="{{ $fiscalYear->id }}" {{request('fiscal_year_id','')== $fiscalYear->id ? 'selected': ''}}>{{ $fiscalYear->year }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 input-style-1">
                                <label for="bid_office_id">निकायको नाम</label>
                                <select id="bid_office_id" name="bid_office_id" class="form-select">
                                    <option value="">निकायको नाम छान्नुहोस्</option>
                                    @foreach($bidOffices as $office)
                                        <option value="{{ $office->id }}" {{request('bid_office_id','') == $office->id ? 'selected': ''}}>{{ $office->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-primary">
                                Search
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
                <h6 class="mb-10">बोलपत्र दरखास्त फारमको  सुचि </h6>

                <div class="table-wrapper table-responsive table-hover">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h6>SN</h6></th>
                            <th><h6>आ.व</h6></th>
                            <th><h6>खरिदकर्ताको नाम</h6></th>
                            <th><h6>ठेगाना</h6></th>
                            <th><h6>फोन नं</h6></th>
                            <th><h6>निकायको नाम</h6></th>
                        </tr>
                        <!-- end table row-->
                        </thead>
                        <tbody>
                        @foreach($bids as $bid)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td class="min-width">
                                    <p>{{$bid->fiscalYear->year ?? ''}}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{$bid->buyer_name ?? ''}}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{$bid->address ?? ''}}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{$bid->phone ?? ''}}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{$bid->bidOffice->name ?? ''}}</p>
                                </td>

                                <td>
                                    <div class="action">
                                        <a href="{{route('admin.bid.show', $bid)}}" class="text-info">
                                            <i class="lni lni-eye"></i>
                                        </a>

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
