<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::all();

    return view('posts', ['posts' => $posts]);

    // $files = File::files(resource_path("posts"));
    // $documents = [];
    // $posts = [];

    // foreach ($files as $file) {
    //     $document = YamlFrontMatter::ParseFile($file);
    //     $posts[] = new Post(
    //         $document->title,
    //         $document->slug,
    //         $document->excerpt,
    //         $document->matter('date'),
    //         $document->body()
    //     );
    // };

    // ddd($posts);

    // $posts = Post::all();

    // $document = YamlFrontMatter::ParseFile(
    //     resource_path('posts/my-fourth-post.html')
    // );

    // ddd($document);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // $path = __DIR__ . "/../resources/posts/{$slug}.html";

    // ddd($path);

    // if (!file_exists($path)) {
    //     // dd('file does not exist');
    //     // ddd('file does not exist');
    //     // abort(404);
    //     return redirect('/');
    // }

    // $post = file_get_contents($path);

    // $post = cache()->remember("posts.{$slug}", 5, function () use ($path) {
    //     var_dump('file_get_contents');
    //     return file_get_contents($path);
    // });

    // $post = cache()->remember("posts.{$slug}", now()->addMinutes(20), fn () => file_get_contents($path));

    // $post = Post::find($slug);
    // $post = Post::find($id);

    return view('post', ['post' => $post]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['posts' => $category->posts]);
});
