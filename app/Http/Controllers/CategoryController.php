<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Lấy tất cả danh mục và sản phẩm liên quan
        $categories = Category::with('products')->get();

        // Trả về view hiển thị
        return view('categories.index', compact('categories'));
    }
}
