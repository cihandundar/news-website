@extends('front.base')


@section('content')
    @include('front.partials.sections.news-category')
    @include('front.partials.sections.hero')
    @include('front.partials.sections.editors-pick')
    @include('front.partials.sections.latest-news')
    @include('front.partials.sections.cta')
    @include('front.partials.sections.technology')
    @include('front.partials.sections.writers')
    @include('front.partials.sections.podcast')
@endsection
