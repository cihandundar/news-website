@extends('front.base')


@section('content')
    @include('front.partials.sections.news-category')
    @include('front.partials.sections.hero')
    @include('front.partials.sections.editors-pick')
    @include('front.partials.sections.latest-news')
@endsection
