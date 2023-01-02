@extends('components/layout')
@section('content')

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Edit Post! - {{ $post->title }}
        </h1>
        <form method="POST" action="/posts/{{ $post->id }}" class="mt-10">
            @csrf
            @method('PATCH')

            <!-- Title -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Title
                </label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                    Slug
                </label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}" required>
                @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Excerpt -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                    Excerpt
                </label>
                <textarea class="border border-gray-400 p-2 w-full" name="excerpt" 63 id="excerpt" required>{{ old('excerpt', $post->excerpt) }}</textarea>
                @error('excerpt')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Body -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                    Body
                </label>
                <textarea class="border border-gray-400 p-2 w-full" name="body" id="body" required>{{ old('body', $post->body) }}</textarea>
                @error('body')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                    Category
                </label>
                <select name="category_id" id="category_id">
                    @php
                    $categories = \App\Models\Category::all();
                    @endphp
                    @foreach(@$categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Update -->
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Update
                </button>
            </div>

            <!-- Errors -->
            @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li class="text-red-500 text-xs mt-1">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </form>
    </main>
</section>

@endsection