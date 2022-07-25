<?php

namespace App\Http\Controllers\Backend\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Post\CreatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(20);
        return view('dashboard.post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'name_en', 'name_te')->whereStatus(1)->get();
        return view('dashboard.create_post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $data = $request->validated();
        foreach (config('app.available_locales') as $locale) {
            $data['image_' . $locale] = 'noimage_' . $locale . '.png';
            if ($request->hasFile('image_' . $locale)) {
                $image = $request->file('image_' . $locale);
                $destination = "uploads/posts/images/";
                $image_name = mt_rand() . "." . $image->getClientOriginalExtension();
                $image->move($destination, $image_name);
                $data['image_' . $locale] = $image_name;
            }
        }
        $data['created_by'] = $request->user()->id;
        $posts = Post::create($data);
        if ($posts) {
            return redirect()->back()->with('message', 'Post created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ckEditorImageUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            // $request->file('upload')->storeAs('assets/category/ckeditor/', $filenametostore);

            $request->file('upload')->move(public_path('assets/ckeditor'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('assets/ckeditor/' . $filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
