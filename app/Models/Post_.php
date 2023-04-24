<?php

namespace App\Models;



class Post 
{
    public static  $blog_posts = [
        [
            "title" => 'Judul post pertama',
            "slug" => 'judul-post-pertama',
            "author" => 'husein alfarizi',
            "body" => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur iste consequuntur voluptatibus, sunt amet, quisquam assumenda repudiandae, labore architecto aspernatur magnam ad quibusdam? Provident atque placeat aliquid officia consectetur tempore excepturi sapiente iste illum, odio, aliquam alias fugiat vel laborum ipsa maxime voluptas recusandae labore omnis? Adipisci, eos. Debitis, modi?'
        ],
        [
            "title" => 'Judul post ke dua',
            "slug" => 'judul-post-ke-dua',
            "author" => 'husein alfarizi',
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam illum eveniet ipsum eligendi non dolorem, porro ratione iste sint nostrum ipsa? Nesciunt autem saepe maiores eos excepturi est. Quisquam ipsa minus, molestias animi blanditiis corrupti illum sed natus voluptatibus obcaecati sunt cum inventore, nulla porro. Molestiae quasi voluptate ipsa hic ex aspernatur mollitia doloremque illum enim! Beatae, sed vero? Nisi ratione assumenda voluptatum cumque animi illum ducimus, earum mollitia tempore, dolore molestiae fugiat officia nesciunt maiores rerum sequi porro dolores eaque asperiores facilis deleniti, at vel blanditiis. Assumenda facere aperiam quos tempora. Repellendus necessitatibus in corporis dicta dolorum at ipsam.'
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function get($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }

    
}
