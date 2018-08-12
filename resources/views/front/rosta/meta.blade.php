@section('meta')
    <title>{{$rosta->page_title_field}}</title>
    <meta name="description" content="{{$rosta->seo_description_field}}">
    <meta name="keywords" content="{{$rosta->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $rosta->seo_text_field])
@endsection