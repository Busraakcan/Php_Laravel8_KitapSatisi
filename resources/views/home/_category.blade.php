@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

<div class="col-lg-3">
    <div class="hero__categories">
        <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>All departments</span>
        </div>
        <ul class="header__menu__dropdown">
            @foreach($parentCategories as $rs)
                <li >
                    <div class="hero__categories__all">

                     <span>{{$rs->title}}</span>
                    </div>
                     @if(!$rs->children->isEmpty())
                        <ul class="header__menu__dropdown">
                            @foreach($rs->children as $child)
                                <li><a href="#">{{$child->title}}</a></li>
                            @endforeach
                        </ul>
                     @endif

                </li>
            @endforeach
        </ul>

    </div>
</div>




