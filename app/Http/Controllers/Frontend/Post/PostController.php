<?php

namespace App\Http\Controllers\Frontend\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function list()
    {
        $locale = app()->getLocale();
        $posts = Post::select('id', 'title_' . $locale, 'body_' . $locale, 'image_' . $locale)
            ->whereNotNull('title_' . $locale)
            ->where('title_' . $locale, '!=', '')
            ->whereStatus(1)
            ->latest()
            ->get();
        return $this->successResponse(PostResource::collection($posts), 'Posts fetched Successfully', Response::HTTP_OK);
    }
}
