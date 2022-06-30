<?php

namespace App\Models;

class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Artikel 1",
            "slug" => "artikel-1",
            "author" => "Nama 1",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minima nobis asperiores voluptatibus. Dolores possimus alias sit nulla cumque mollitia. Optio modi, adipisci ipsum non labore, commodi inventore sit delectus cupiditate pariatur mollitia unde minus ex voluptatem sapiente similique iusto iure quasi dicta asperiores atque! Aliquid provident dignissimos ipsa minima obcaecati veritatis ex tempore omnis repellat sint at maxime eos necessitatibus, consectetur quod soluta beatae iste unde consequatur tempora, eius maiores exercitationem velit libero? Repudiandae, sit? Odit, voluptatibus? Expedita, qui."
        ],
        [
            "title" => "Artikel 2",
            "slug" => "artikel-2",
            "author" => "Nama 2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minima nobis asperiores voluptatibus. Dolores possimus alias sit nulla cumque mollitia. Optio modi, adipisci ipsum non labore, commodi inventore sit delectus cupiditate pariatur mollitia unde minus ex voluptatem sapiente similique iusto iure quasi dicta asperiores atque! Aliquid provident dignissimos ipsa minima obcaecati veritatis ex tempore omnis repellat sint at maxime eos necessitatibus, consectetur quod soluta beatae iste unde consequatur tempora, eius maiores exercitationem velit libero? Repudiandae, sit? Odit, voluptatibus? Expedita, qui."
        ],
        [
            "title" => "Artikel 3",
            "slug" => "artikel-3",
            "author" => "Nama 3",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi minima nobis asperiores voluptatibus. Dolores possimus alias sit nulla cumque mollitia. Optio modi, adipisci ipsum non labore, commodi inventore sit delectus cupiditate pariatur mollitia unde minus ex voluptatem sapiente similique iusto iure quasi dicta asperiores atque! Aliquid provident dignissimos ipsa minima obcaecati veritatis ex tempore omnis repellat sint at maxime eos necessitatibus, consectetur quod soluta beatae iste unde consequatur tempora, eius maiores exercitationem velit libero? Repudiandae, sit? Odit, voluptatibus? Expedita, qui."
        ]
    ];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
    
}
