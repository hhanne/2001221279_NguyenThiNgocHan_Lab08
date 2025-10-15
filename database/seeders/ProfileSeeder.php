<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo 5 users (nếu chưa có)
        User::factory()->count(5)->create()->each(function ($user) {
            Profile::create([
                'user_id' => $user->id,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
            ]);
        });
    }
}
