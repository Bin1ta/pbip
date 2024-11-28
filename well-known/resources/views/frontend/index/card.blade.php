<div class="row">
@foreach($categories as $category)
        <div class="col-lg-6 mt-2">
            <div class="card-01">
                <h6 class="heading-line mb-3"> {{ $category->title }}</h6>
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
                <div class="tab-content card-content" id="myTabContent">
                    @forelse($category->documentCategories as $subcategoryData)
                        <div class="tab-pane fade {{$loop->first ? 'show active': ''}}"
                             id="{{ \Illuminate\Support\Str::slug($subcategoryData->title,'-') }}"
                             role="tabpanel" aria-labelledby="{{ \Illuminate\Support\Str::slug($subcategoryData->title,'-') }}-tab">
                            <div class="tab-content">
                                @foreach($subcategoryData->documents->take(3) as $document)
                                <a href="{{route('documentDetail',$document->slug)}}" class="card-01 mb-2 border">
                                    <h6 class="heading">{{$document -> title}}</h6>
                                    <p class="mt-2">{{$document -> published_date->toDateString()}} | {{$document -> publisher}}</p>
                                </a>
                                @endforeach
                            </div>
                            <div class="text-right">
                                <a href="{{route('documentCategory',$subcategoryData->slug)}}"
                                   class="btn btn-danger btn-sm">
                                    थप हेर्नुहोस
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="tab-content">
                            @foreach($category->mainDocuments->take(3) as $document)
                                <a href="{{route('documentDetail',$document->slug)}}" class="card-01 mb-2 border">
                                    <h6 class="heading">{{$document -> title}}</h6>
                                    <p class="mt-2">{{$document -> published_date->toDateString()}} | {{$document -> publisher}}</p>
                                </a>
                            @endforeach
                        </div>
                        <div class="text-right">
                            <a href="{{route('documentCategory',$category->slug)}}"
                               class="btn btn-danger btn-sm">
                                थप हेर्नुहोस
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
@endforeach
</div>
