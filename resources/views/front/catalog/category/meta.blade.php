@section('meta')
    <title>{{$products->page_title_field}}</title>
    <meta name="description" content="{{$products->seo_description_field}}">
    <meta name="keywords" content="{{$products->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $products->seo_text_field])
@endsection