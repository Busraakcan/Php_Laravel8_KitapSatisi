@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/booststrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/booststrap.min.js"></script>

<div class="col-lg-3">
    <div class="category-nav @if(!isset($page)) show-on-click @endif">
        <div class="hero__categories">
            <div class="hero__categories__all">
                <i class="fa fa-bars"></i>
                <span>CATEGORIES</span>
            </div>
            <ul>
                @foreach($parentCategories as $rs)
                    <li>
                        <a href="{{route('categoryProducts', $rs->id)}}">{{$rs->title}}</a>
                        @if(!$rs->children->isEmpty())
                            <ul style="border: none; padding-left: 20px;">
                                @foreach($rs->children as $child)
                                    <li><a href="{{route('categoryProducts', $child->id)}}">{{$child->title}}</a></li>
                                @endforeach
                            </ul>
                        @endif

                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>




