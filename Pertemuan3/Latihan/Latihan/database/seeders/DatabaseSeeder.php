<?php
// ... (Namespace dan import lainnya)
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        
        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'morenoadmin@mail.com',
            'password' => bcrypt('password'),
        ]);

        // Buat 4 User tambahan menggunakan Factory (Total 5 Users)
        User::factory(4)->create();


        Category::create([
            'name' => 'Drifter',
            'slug' => 'Drift'
        ]);
        
        Category::create([
            'name' => 'Race',
            'slug' => 'race'
        ]);

        Post::factory(10)->create();
    }
}