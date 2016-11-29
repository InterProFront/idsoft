@section('meta')
    <title>{{$products->category_name_field}} заказать в Алматы, Казахстане - IDSOFT</title>
    <meta name="description" content="Компания ID SOFT предлагает заказать {{$products->category_name_field}} недорого. Лучшая цена, отзывы. ☎ +7 (727) 220-2020">
    <meta name="keywords" content="{{$products->category_name_field}}, {{$products->category_name_field}} купить, заказать {{$products->category_name_field}}">
    @include('front.seotext',['seo_text' => $products->seo_text_field])
@endsection