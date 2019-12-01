@section('catalog')
    <div class="content">
        <div class="catalog-menu">
            <div class="wrapper">
                <div class="catalog-article"><a href="/laptops">laptops</a></div>
                <div class="catalog-article article-last"><a href="/smartphones">smartphones</a></div>
            </div>
        </div>
        <div class="wrapper">
            <div class="catalog-grid">
              @if($success)
              @foreach($items as $item)
                <div class="catalog-item" id="{{$item->id}}">
                    <img src="{{$item->imageUrl}}" alt="Картинка товара" class="catalog-item__img">
                    <p class="catalog-item__name">{{$item->title}}</p>
                    <p class="catalog-item__price-new">{{$item->finalPrice}} P</p>
                    <p class="catalog-item__price-old">{{$item->price}} P</p>
                    <div class="button-wrapper">
                        <button class="catalog-item__basket-button"><img src="img/basket.png" alt=""></button>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
@show
