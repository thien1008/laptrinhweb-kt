<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            // Mỗi user tạo 3 đơn hàng
            for ($i = 1; $i <= 3; $i++) {
                Order::create([
                    'user_id' => $user->id,
                    'order_code' => 'ORD-' . strtoupper(Str::random(6)),
                ]);
            }
        }
    }
}
