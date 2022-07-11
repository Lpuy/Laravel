<?php

namespace Database\Seeders;

use App\Models\{Categories, Goods, SubCategories, User, Size, GoodsSize, Feedback, AdminUser};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        AdminUser::factory(1)->create([
//            'name' => 'Admin',
//            'email' => 'dveresklya@gmail.com',
//            'password' => bcrypt('monsterkill27'),
//        ]);
//        User::factory(1)->create();
//        Categories::factory(1)->create();
//        SubCategories::factory(1)->create();
        Goods::factory(10)->create();
//        Size::factory(1)->create();
//        GoodsSize::factory(1)->create();
//        Feedback::factory(2)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
