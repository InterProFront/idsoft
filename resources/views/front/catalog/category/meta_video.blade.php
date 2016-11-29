@section('meta')
    <title>{{$seo->category_name_field}} заказать в Алматы, Казахстане - IDSOFT</title>
    <meta name="description" content="Компания ID SOFT предлагает заказать {{$seo->category_name_field}} недорого. Лучшая цена, отзывы. ☎ +7 (727) 220-2020">
    <meta name="keywords" content="{{$seo->category_name_field}}, {{$seo->category_name_field}} купить, заказать {{$seo->category_name_field}}">
    @include('front.seotext',['seo_text' => $seo->seo_text_field])
@endsection