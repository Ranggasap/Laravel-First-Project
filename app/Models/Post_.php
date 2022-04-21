<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $galery_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Rangga Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione deleniti veniam delectus aliquam assumenda dignissimos corporis! Cupiditate eligendi distinctio optio. Deleniti, explicabo iusto? Nisi ducimus veritatis quos dolores natus ipsam ipsa sit ullam incidunt doloribus eaque voluptates impedit dolorem, facilis fugit, voluptatibus mollitia aperiam nemo dolorum quae accusantium recusandae reprehenderit. Ullam ab aliquid aut dolorum doloribus at nam molestiae, nobis ut itaque iste nesciunt consequatur necessitatibus atque. Quis sunt perspiciatis, magni, saepe iusto fugit totam quos eum mollitia assumenda dolorum.",
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Anggi Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione deleniti veniam delectus aliquam assumenda dignissimos corporis! Cupiditate eligendi distinctio optio. Deleniti, explicabo iusto? Nisi ducimus veritatis quos dolores natus ipsam ipsa sit ullam incidunt doloribus eaque voluptates impedit dolorem, facilis fugit, voluptatibus mollitia aperiam nemo dolorum quae accusantium recusandae reprehenderit. Ullam ab aliquid aut dolorum doloribus at nam molestiae, nobis ut itaque iste nesciunt consequatur necessitatibus atque. Quis sunt perspiciatis, magni, saepe iusto fugit totam quos eum mollitia assumenda dolorum.",
        ]
    ];

    public static function all()
    {
        return collect(self::$galery_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
