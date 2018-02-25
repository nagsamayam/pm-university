<?php

namespace App\Http\Controllers;

use Agent;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke(Post $post)
    {
        $postsAttributes = Post::defaultAttributes();
        $bachelorePosts = $post->getPosts(Post::BACHELORE);
        $masterPosts = $post->getPosts(Post::MASTER);
        $specializationPosts = $post->getPosts(Post::SPECIALIZATION);
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
