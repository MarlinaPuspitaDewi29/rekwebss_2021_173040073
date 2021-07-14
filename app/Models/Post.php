<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Marlina Puspita Dewi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et aliquam veritatis, culpa tenetur odit dignissimos.
            Quisquam, quia voluptates excepturi quam quidem nesciunt quos repellendus, nemo molestias iste porro, mollitia dolorum
            ut accusamus. Sit doloribus quod rem excepturi repudiandae. Qui adipisci eos odio rerum error, totam sapiente explicabo
            in hic obcaecati ea quo rem cum! Incidunt, consectetur quas. Quibusdam delectus sit sapiente libero quisquam, dolorem
            sed eum? Aspernatur soluta exercitationem earum labore quo, adipisci, impedit voluptates, quam dolorem eligendi totam
            consequatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Arlina Puspita",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora at corrupti maxime commodi, nemo veniam impedit, non,
            natus molestias ipsa iure totam quis ea! Aliquid adipisci corrupti aut facilis quisquam cumque est, delectus hic
            suscipit, ullam nesciunt repellendus nostrum ab itaque eveniet atque unde beatae sed quos magni. Quis architecto dolorem
            consectetur? Adipisci, vel consectetur sint atque quam sed itaque unde officiis aliquid eius, voluptatibus sunt
            dignissimos dolores assumenda expedita, aspernatur corrupti totam dolorum in ab reiciendis labore rerum optio. Sint qui,
            sapiente a tenetur accusamus exercitationem quae eos hic blanditiis explicabo rem distinctio error expedita
            reprehenderit quas praesentium ex!"
        ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}