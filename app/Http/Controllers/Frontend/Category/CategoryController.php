<?php

namespace App\Http\Controllers\Frontend\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function list()
    {
        $locale = app()->getLocale();
        $categories = Category::select('id', 'name_' . $locale, 'image_' . $locale)
            ->whereNotNull('name_' . $locale)
            ->where('name_' . $locale, '!=', '')
            ->whereStatus(1)
            ->get();
        return $this->successResponse(CategoryResource::collection($categories), 'Categories fetched Successfully', Response::HTTP_OK);
    }
}
