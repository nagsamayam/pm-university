<?php

namespace App\Http\Controllers;

use Agent;
use App\Models\Post;

class PostsController extends Controller
{
    public function __invoke(Post $post)
    {
        $previousPost = Post::previousRecord($post);
        $nextPost = Post::nextRecord($post);
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
        $view = Agent::isMobile() ? 'posts.show_mobile' : 'posts.show';

        return view($view, compact(
            'post',
            'previousPost',
            'nextPost',
            'bachelorePosts',
            'masterPosts',
            'specializationPosts',
            'placements',
            'hoks'
        ));
    }
}
