<?php

namespace App\Http\Controllers\Frontend\Post\Comment;

use App\Helper\Util;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Post\Comment\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateCommentRequest $request, $id)
    {
        $data = $request->validated();
        $post = Post::whereStatus(Util::STATUS_ACTIVE)->find($id);
        if (!$post) {
            return  $this->errorResponse('No related post found', Response::HTTP_NOT_FOUND);
        }
        $post->comments()->create([
            'user_id' => $request->user()->id,
            'comment_en' => $data['comment_en'] ?? '',
            'comment_te' => $data['comment_te'] ?? ''
        ]);
        return  $this->successResponse([], 'Comment Added Successfully', Response::HTTP_CREATED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CreateCommentRequest $request, $post_id, $id)
    {
        $data = $request->validated();
        Post::find($post_id)->comments()->where('id', $id)->update([
            'comment_en' => $data['comment_en'] ?? '',
            'comment_te' => $data['comment_te'] ?? ''
        ]);
        return  $this->successResponse([], 'Comment Updated Successfully', Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return $this->errorResponse('Comment not found', Response::HTTP_OK);
        }
        if ($comment->delete()) {
            return  $this->successResponse('', 'Deleted Successfully', Response::HTTP_OK);
        }
    }
}
