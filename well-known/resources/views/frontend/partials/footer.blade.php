<footer class="footer mt-2">
    <div class="footer-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <h6 class="footer-title mb-3">
                        सम्पर्क
                    </h6>
                    <h6 class="text-white text-bold">
                        {{ $header->office_name }}
                    </h6>
                    <ul class="list mt-2">
                        <li class="text-white">
                            <i class="fa fa-map-marker"></i> {{ $header->office_address }}
                        </li>
                        <li class="text-white">
                            <i class="fa fa-phone"></i> {{ $header->office_phone }}
                        </li>
                        <li class="text-white">
                            <i class="fa fa-envelope"></i> {{ $header->office_email }}
                        </li>
                    </ul>
                    <div class="textwidget mt-4">
                        <span class="fa-stack fa-lg">
                                <a href="#"><i class="fa fa-circle-thin fa-stack-2x" style="color: #fff;"></i>
                                    <i class="fa fa-facebook fa-stack-1x" style="color: #fff;"></i></a>
                            </span><span class="fa-stack fa-lg">
                                <a href="#"><i class="fa fa-circle-thin fa-stack-2x" style="color: #fff;"></i>
                                    <i class="fa fa-twitter fa-stack-1x" style="color: #fff;"></i></a>
                            </span>
                        <span class="fa-stack fa-lg">
                                <a href="#"><i class="fa fa-circle-thin fa-stack-2x" style="color: #fff;"></i>
                                    <i class="fa fa-youtube fa-stack-1x" style="color: #fff;"></i></a>
                            </span>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <h6 class="footer-title mb-3">महत्वपूर्ण लिंक</h6>
                    <div class="home-contact-card">
                        <ul>
                            @foreach ($sharedLinks as $link)
                                <li>
                                    <a href="{{ $link->url }}" target="_blank">
                                        <h6>
                                            {{ $link->title }}
                                        </h6>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <h6 class="footer-title mb-3">हाम्रो नक्सा</h6>
                    <div class="textwidget links">
                        <iframe src="{{$header->map_iframe}}" width="100%" height="250" style="border:0;"
                                allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <span>Copyright © {{ $header->office_name ?? ''}}</span>
        <span>Last Updated: 2081-07-21</span>
        <span>Visitors: {{$totalVisitors}}</span>
        <span>Developed By:
            <a href="https://ninjainfosys.com" target="blank">Ninja Infosys</a></span>
    </div>
</footer>
