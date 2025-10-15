<?php
    

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;      // 🔥 THÊM DÒNG NÀY
use App\Models\Student;      // nếu có dùng
use App\Models\Course;       // nếu có dùng


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
       for ($i = 1; $i <= 5; $i++) {
    $category = Category::create([
        'name' => 'Danh mục ' . $i,
        'description' => 'Mô tả cho danh mục ' . $i,
    ]);

    for ($j = 1; $j <= 10; $j++) {
        Product::create([
            'name' => 'Sản phẩm ' . $j . ' của danh mục ' . $i,
            'price' => rand(10000, 500000),
            'stock' => rand(0, 100), // ✅ thêm dòng này
            'category_id' => $category->id,
        ]);
    }
}


        // --- Bài 4: Student - Course ---
      $this->call(StudentCourseSeeder::class);
       $this->call(ProfileSeeder::class);
    }
}
