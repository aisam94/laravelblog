<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $slug;
    public $excerpt;
    public $date;
    public $body;

    /**
     * @param $title
     * @param $slug
     * @param $excerpt
     * @param $date
     * @param $body
     */
    public function __construct($title, $slug, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function all()
    {
        $files = File::files(resource_path("posts/"));

        $posts = collect($files)->map(fn ($file) => YamlFrontMatter::ParseFile($file))->map(fn ($document) =>
        new Post(
            $document->title,
            $document->slug,
            $document->excerpt,
            $document->matter('date'),
            $document->body()
        ))->sortBy('date');

        // $posts = array_map(function ($file){
        //     $document = YamlFrontMatter::parseFile($file);
        //     return new Post(
        //         $document->title,
        //         $document->slug,
        //         $document->excerpt,
        //         $document->matter('date'),
        //         $document->body()
        //     );
        // }, $files);

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

        return $posts;

        // return array_map(function ($file) {
        //     return $file->getContents();
        // }, $files);
    }

    public static function find($slug)
    {
        // $path = resource_path("posts/{$slug}.html");
        // if (!file_exists($path)) {
        //     throw new ModelNotFoundException();
        // }
        // return cache()->remember("posts.{$slug}", 6, fn () => file_get_contents($path));

        $posts = static::all();

        return ($posts->firstWhere('slug', $slug));

        // foreach ($posts as $post) {
        //     if ($slug == $post->slug) {
        //         $post1 = $post;
        //     }
        // }
        // return $post1;
    }
}
