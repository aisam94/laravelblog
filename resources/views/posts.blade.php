@extends('components/layout')
@section('content')

@include('components/_posts-header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @include('components/post-featured-card')

    <div class="lg:grid lg:grid-cols-2">
        @include('components/post-card')
        @include('components/post-card')
    </div>
    <div class="lg:grid lg:grid-cols-3">
        @include('components/post-card')
        @include('components/post-card')
        @include('components/post-card')
        @include('components/post-card')
    </div>
</main>

@endsection