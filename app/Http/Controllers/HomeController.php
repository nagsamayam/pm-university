<?php

namespace App\Http\Controllers;

use Agent;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        $postsAttributes = Post::defaultAttributes();
        $bachelorePosts = Post::published()
            ->type(Post::BACHELORE)
            ->recent()
            ->get($postsAttributes);
        $masterPosts = Post::published()
            ->type(Post::MASTER)
            ->recent()
            ->get($postsAttributes);
        $specializationPosts = Post::published()
            ->type(Post::SPECIALIZATION)
            ->recent()
            ->get($postsAttributes);
        $placements = Post::published()
            ->type(Post::PLACEMENTS)
            ->get($postsAttributes);
        $hoks = Post::published()
            ->type(Post::HOK)
            ->get($postsAttributes)->take(3);
        $view = Agent::isMobile() ? 'posts.index_mobile' : 'posts.index';

        return view($view, compact(
            'bachelorePosts',
            'masterPosts',
            'specializationPosts',
            'placements',
            'hoks'
        ));
    }
}
