<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Http\Controllers\Controller;

class ArticlePictures extends Controller
{
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->picture = null;
        $article->save();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
