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
        $view = Agent::isMobile() ? 'posts.show_mobile' : 'posts.show';

        return view($view, compact('post', 'previousPost', 'nextPost'));
    }
}
