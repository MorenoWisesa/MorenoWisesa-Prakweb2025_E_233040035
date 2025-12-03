<?php

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        
        User::create([
            'name' => 'Moreno Wisesa Daffa',
            'username' => 'admin',
            'email' => 'morenowisesan@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(4)->create();


        Category::create([
            'name' => 'Modifikasi Mobil',
            'slug' => 'modifikasi-mobil'
        ]);
        
        Category::create([
            'name' => 'Penggunaan Velg BBS Pada Mobil Japan',
            'slug' => 'penggunaan-velg-bbs-pada-mobil-japan'
        ]);

        Post::factory(10)->create();
    }
}