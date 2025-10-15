<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Student;

class QueryDemoController extends Controller
{
    public function index()
    {
        // 1️⃣ Tìm tất cả sản phẩm có giá > 100000
        $products = Product::where('price', '>', 100000)->get();

        // 2️⃣ Đếm số sản phẩm trong mỗi danh mục
        $categories = Category::withCount('products')->get();

        // 3️⃣ Lấy danh sách sinh viên kèm số lượng môn học đã đăng ký
        $students = Student::withCount('courses')->get();

        return view('queries.index', compact('products', 'categories', 'students'));
    }
}
