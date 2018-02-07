<?php

namespace App\Helpers;

use App\Models\Post;
use App\Models\Article;

class PostStats
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function articles()
    {
        return $this->articles->count();
    }

    public function topTenArticles()
    {
        return $this->post->articles
            ->where('type', Article::TOP_TEN)
            ->count();
    }

    public function latestArticles()
    {
        return $this->post->articles
            ->where('type', Article::LATEST)
            ->count();
    }

    public function videosArticles()
    {
        return $this->post->articles
            ->where('type', Article::VIDEOS)
            ->count();
    }

    public function booksArticles()
    {
        return $this->post->articles
            ->where('type', Article::BOOKS)
            ->count();
    }

    public function interviewsArticles()
    {
        return $this->post->articles
            ->where('type', Article::INTERVIES)
            ->count();
    }

    public function toolsArticles()
    {
        return $this->post->articles
            ->where('type', Article::TOOLS)
            ->count();
    }
}