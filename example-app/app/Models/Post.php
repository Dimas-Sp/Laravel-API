<?php

namespace App\Models;

class Post 
{
   private static $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Dimas Surya",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. In adipisci beatae non eum ex, soluta maxime id provident pariatur facilis enim laudantium fuga dolores ratione quidem nesciunt ullam eveniet libero voluptate minus dignissimos vel explicabo voluptatibus? Culpa, laboriosam id provident suscipit dolor veritatis voluptatum possimus obcaecati, optio officiis facilis vero consequuntur earum inventore. Sunt nam dolorem esse reprehenderit non assumenda temporibus, harum quasi fugiat ducimus. Nam corporis illo et dolor eos. Maiores recusandae alias quas, suscipit repellendus necessitatibus dicta et."
        ],
        [
            "title" => "Judul Dimas",
            "slug" => "judul-2",
            "author" => "Dimas",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic quisquam maxime voluptatum repudiandae eius, quasi iure atque, voluptate porro sequi voluptas? Eos minima dolorum et, adipisci repudiandae sit explicabo dicta impedit deserunt, eveniet animi reprehenderit nostrum vel temporibus consequuntur nihil officiis placeat. Eum veniam voluptates fugit autem perspiciatis error similique saepe alias ut incidunt, asperiores optio accusantium dignissimos, repellendus eligendi quam distinctio, nihil iste doloremque cupiditate dolore totam. Tenetur maxime temporibus quisquam incidunt mollitia provident explicabo id corporis ad voluptates praesentium ut sunt voluptatibus quasi inventore autem, beatae libero vero voluptate ipsum at sequi labore placeat? Non rem sapiente ea!"
        ],
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
