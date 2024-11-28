<section class="document-section mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                @if($header->document_list_type=="list")
                    @include("frontend.index.list")
                @else
                    @include("frontend.index.card")
                @endif
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight m-b-15">
                        <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
                            सम्बन्धित जानकारीहरु <h6 class="content_title"><span class="pull-right"></span>
                            </h6>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="clearall"></div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="blockmenu">
                            <a href="{{route('static',"faq")}}">
                                <span class="block-icon"><i class="fa fa-question-circle"></i></span>
                                <div class="block-content">
                                    <div class="block-content-title"
                                         style="color: #fff;">धेरै सोधिएका प्रश्नहरु</div>
                                </div>
                            </a>
                        </div>
                        <!--button end-->
                        <!--button start-->
                        <div class="blockmenu">
                            <a href="#">
                                <span class="block-icon"><i class="fa fa-envelope"></i></span>
                                <div class="block-content">
                                    <div class="block-content-title" style="color: #fff;">{{ __('Check Mail') }}</div>
                                </div>
                            </a>
                        </div>
                        <!--button end-->
                        <!--button start-->
                        <div class="blockmenu">
                            <a href="{{route('static',"bill")}}">
                                <span class="block-icon"><i class="fa fa-calculator"></i></span>
                                <div class="block-content">
                                    <div class="block-content-title"
                                         style="color: #fff;">
                                        बिल सर्बजनिकरण
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--button end-->
                        <div class="blockmenu">
                            <a href="https://twitter.com/">
                                <span class="block-icon"><i class="fa fa-twitter"></i></span>
                                <div class="block-content">
                                    <div class="block-content-title" style="color: #fff;">{{ __('Twitter Link') }}</div>
                                </div>
                            </a>
                        </div>
                        <!--button start-->
                        <div class="blockmenu">
                            <a href="{{route('static', "smuggling")}}">
                                <span class="block-icon"><i class="fa fa-clipboard"></i></span>
                                <div class="block-content">
                                    <div class="block-content-title" style="color: #fff;">तस्करी</div>
                                </div>
                            </a>
                        </div>
                        <!--button end-->
                        <!--button start-->
                        <div class="blockmenu">
                            <a href="{{route('static',"links")}}">
                                <span class="block-icon"><i class="fa fa-link"></i></span>
                                <div class="block-content">
                                    <div class="block-content-title" style="color: #fff;">
                                        लिंकहरु
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--button end-->
                    </div>
                </div>
                <div class="clearall"></div>
            </div>
        </div>
    </div>
</section>
