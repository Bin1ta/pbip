<section class="nav-section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark light shadow">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('welcome')}}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        @foreach($sharedMenus as $sharedMenu)
                            <li class="nav-item dropdown" id="{{$loop->iteration}}">
                                <a class="nav-link {{$sharedMenu->menus_count>0 ? 'dropdown-toggle' : ''}}"
                                   @if($sharedMenu->menus_count>0) data-bs-toggle="dropdown" @endif
                                   @if($sharedMenu->menus_count>0)
                                        href="#"
                                   @else
                                        href="
                                            @if(!empty($sharedMenu->model))
                                                @switch($sharedMenu->type)
                                                    @case('category')
                                                        {{route('documentCategory', $sharedMenu->model->slug)}}
                                                    @break
                                                    @case('subDivision')
                                                        {{route('subDivision', $sharedMenu->model->slug)}}
                                                    @break
                                                    @default
                                                        {{route('officeDetail', $sharedMenu->model->slug)}}
                                                    @endswitch
                                            @else
                                                {{route('static',$sharedMenu->slug)}}
                                            @endif
                                       "
                                   @endif
                                >
                                    {{$sharedMenu->title}}
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach($sharedMenu->menus as $subMenu)
                                        <li>
                                            <a class="dropdown-item"
                                               href="
                                               @if(!empty($subMenu->model))
                                                    @switch($subMenu->type)
                                                       @case('category')
                                                           {{route('documentCategory', $subMenu->model->slug)}}
                                                           @break
                                                           @case('subDivision')
                                                           {{route('subDivision', $subMenu->model->slug)}}
                                                           @break
                                                           @default
                                                           {{route('officeDetail', $subMenu->model->slug)}}
                                                       @endswitch
                                               @else
                                                   {{route('static',$subMenu->slug)}}
                                               @endif
                                                "
                                            >
                                                {{$subMenu->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
