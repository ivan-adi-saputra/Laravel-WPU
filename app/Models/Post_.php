<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama", 
            "slug" => "judul-posts-pertama",
            "author" => "Ivan Adi Saputra", 
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, sed! Accusamus facilis, dignissimos ipsam quaerat, hic est natus quam id eius, odit aspernatur amet. Laboriosam quis deleniti earum. Placeat, vero?"
        ],
        [
            "title" => "Judul Posts Kedua", 
            "slug" => "judul-posts-kedua",
            "author" => "Sandhika Galih", 
            "body" => "Lorem ipsum, dolor pisicing elit. Esse, sed! Accusamus facilis, dignissimos ipsam quaerat, hic est natus quam id eius, odit aspernatur amet. Laboriosam quis deleniti earum. Placeat, vero?"
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
