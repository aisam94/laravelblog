@extends('components/layout')
@section('content')

@include('components/_posts-header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if ($posts->count())
    @include('components/post-featured-card', ['post' => $posts[0]])

    <div class="lg:grid lg:grid-cols-2">
        @foreach( $posts->skip(1) as $post)
        @include('components/post-card', ['post' => $post])
        @endforeach
    </div>
    <div class="lg:grid lg:grid-cols-3">
        <!-- @include('components/post-card') -->
    </div>

    @else
    <p class='text-center'>No posts yet. Please check back later.</p>
    @endif
</main>

@endsection