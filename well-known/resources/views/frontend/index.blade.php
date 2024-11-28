@extends('layouts.master')
@section('content')
    <section class="newsbar-section mt-2">
        <div class="container-fluid">
            <div class="newsbar-container">
                <div class="flex-shrink-0 newsbar-title pr-lg-3">ताजा सूचना</div>
                <div class="d-block jctkr-wrapper jctkr-initialized">
                    <ul class="marquee-list">
                        <marquee onmouseover="stop()" onmouseout="start()">
                            @foreach($tickerFiles as $tickerFile)
                                <li>
                                    <a href="{{route('documentDetail',$tickerFile->slug)}}">
                                        {{$tickerFile->title}} ({{$tickerFile->published_date->toDateString()}})
                                        <span class="type">नयाँ</span>
                                    </a>
                                </li>
                            @endforeach
                        </marquee>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="introduction mt-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 order-3 order-lg-1">
                    <h5 class="title-dark">सब डिभिजन कार्यालयहरु</h5>
                    <div class="row">
                        @foreach($subDivisions as $subDivision)
                            <div class="col-sm-6 col-md-4 col-lg-12 mt-2 mt-sm-0 mt-lg-2">
                                <a href="{{route('subDivisionDetail',$subDivision->slug)}}">
                                    <div class="card-06">
                                        <h6 class="f1">{{$subDivision->title}}</h6>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div id="slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($sliders as $sliderButton)
                                <button type="button" data-bs-target="#slider"
                                        data-bs-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}"
                                        @if($loop->first) aria-current="true" @endif
                                        aria-label="Slide {{$loop->iteration}}"
                                ></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($sliders as $slider)
                                <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                    <img src="{{$slider->photo}}" class="d-block w-100 height-455"
                                         alt="{{$slider->title}}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>{{$slider->title}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 order-2 order-lg-3">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12 mt-3 mt-md-0">
                            <div class="card-01">
                                @if($header->chief_id || $header->information_officer_id)
                                    <ul class="list list-01">
                                        <li>
                                            @if ($header->chief_id)
                                                <div class="avatar avatar-lg">
                                                    <img src="{{$header->chief->photo ?? ''}}"
                                                         alt="{{$header->chief->name ?? ''}}">
                                                </div>
                                                <div class="textbox-01">
                                                    <h6>{{$header->chief->name ?? ''}}</h6>
                                                    <p>(कार्यालय प्रमुख)</p>
                                                    <p><i class="fa fa-phone"></i> {{$header->chief->phone ?? ''}}</p>
                                                    <p><i class="fa fa-envelope"></i> {{$header->chief->email ?? ''}}
                                                    </p>
                                                </div>
                                        </li>
                                        @endif
                                        @if ($header->information_officer_id)
                                            <li>
                                                <div class="avatar avatar-lg">
                                                    <img src="{{$header->informationOfficer->photo ?? ''}}"
                                                         alt="{{$header->informationOfficer->name ?? ''}}">
                                                </div>
                                                <div class="textbox-01">
                                                    <h6>{{$header->informationOfficer->name ?? ''}}</h6>
                                                    <p>(सूचना अधिकारी)</p>
                                                    <p>
                                                        <i class="fa fa-phone"></i> {{$header->informationOfficer->phone ?? ''}}
                                                    </p>
                                                    <p>
                                                        <i class="fa fa-envelope"></i> {{$header->informationOfficer->email ?? ''}}
                                                    </p>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 mt-3">
                            <div class="card-01 h-100">
                                <h6 class="heading mb-2">{{$officeDetail->title ?? ''}}</h6>
                                <p class="text-withlink">
                                    {!! Str::words(strip_tags($officeDetail->description ?? ''), 50, '...') !!}
                                    <a class="intro-title" href="{{route('officeDetail',$officeDetail->slug ?? '')}}">
                                        थप हेर्नुहोस
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.index.document')
    <section class="gallery-section mt-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($galleries as $gallery)
                            <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <a href="{{route('photoGalleryDetails',$gallery->slug)}}">
                                                <img src="{{asset('storage/'.$gallery->photos->first()->images)}}"
                                                     style="width: 100%" class="img-fluid" alt="Image">
                                            </a>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">{{$gallery ->title}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#galleryCarousel" role="button"
                       data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#galleryCarousel" role="button"
                       data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @push('script')
        <script>
            const myCarousel = document.querySelector('#myCarousel');
            const carousel = new bootstrap.Carousel(myCarousel, {
                interval: 2000,
                wrap: false,
                loop: true
            });

        </script>
        <script>
            let items = document.querySelectorAll('#galleryCarousel .carousel-item')
            items.forEach((el) => {
                const minPerSlide = 4
                let next = el.nextElementSibling
                for (var i = 1; i < minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = items[0]
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            })

        </script>
    @endpush
@endsection
