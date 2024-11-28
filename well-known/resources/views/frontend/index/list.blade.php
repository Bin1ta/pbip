@foreach($categories as $category)
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
        {{ $category->title }}<h6 class="content_title"><span class="pull-right"></span></h6>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach($category->documentCategories as $subcategory)
            <li class="nav-item" role="presentation">
                <button class="nav-link {{$loop->first ? 'active': ''}}"
                        id="{{ \Illuminate\Support\Str::slug($subcategory->title,'-') }}-tab"
                        data-bs-toggle="tab" data-bs-target="#{{ \Illuminate\Support\Str::slug($subcategory->title,'-') }}"
                        type="button" role="tab" aria-controls="{{ \Illuminate\Support\Str::slug($subcategory->title,'-') }}"
                        @if($loop->first)aria-selected="true" @endif>
                    {{ $subcategory->title }}
                </button>
            </li>
        @endforeach
    </ul>
    <div class="tab-content list-content" id="myTabContent">
        @forelse($category->documentCategories as $subcategoryData)
            <div class="tab-pane fade {{$loop->first ? 'show active': ''}}"
                 id="{{ \Illuminate\Support\Str::slug($subcategoryData->title,'-') }}"
                 role="tabpanel" aria-labelledby="{{ \Illuminate\Support\Str::slug($subcategoryData->title,'-') }}-tab">
                <table class="table table-striped">
                    <thead>
                    <tr class="table-head">
                        <th></th>
                        <th>शीर्षक</th>
                        <th>प्रकाशित मिति</th>
                        <th>डाउनलोड</th>
                    </tr>
                    @foreach($subcategoryData->documents->take(3) as $document)
                        <tr>
                            <td><img src="{{asset('images/image.png')}}"
                                     width="30" alt=""></td>
                            <td>{{$document -> title}}</td>
                            <td>{{$document -> published_date->toDateString()}}</td>
                            <td>
                                <a href="{{route('documentDetail',$document->slug)}}">
                                    <i class="fa fa-download btn btn-primary btn-xs"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
                <div class="text-right mb-3">
                    <a class="btn btn-danger btn-sm"
                       href="{{route('documentCategory',$subcategoryData->slug)}}">
                        थप हेर्नुहोस
                    </a>
                </div>
            </div>
            @empty
            <table class="table table-striped">
                <thead>
                <tr class="table-head">
                    <th></th>
                    <th>शीर्षक</th>
                    <th>प्रकाशित मिति</th>
                    <th>डाउनलोड</th>
                </tr>
                @foreach($category->mainDocuments->take(3) as $document)
                    <tr>
                        <td><img src="{{asset('images/image.png')}}"
                                 width="30" alt=""></td>
                        <td>{{$document -> title}}</td>
                        <td>{{$document -> published_date->toDateString()}}</td>
                        <td>
                            <a href="{{route('documentDetail',$document->slug)}}">
                                <i class="fa fa-download btn btn-primary btn-xs"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </thead>
            </table>
            <div class="text-right mb-3">
                <a class="btn btn-danger btn-sm"
                   href="{{route('documentCategory',$category->slug)}}">
                    थप हेर्नुहोस
                </a>
            </div>
        @endforelse
    </div>
@endforeach
