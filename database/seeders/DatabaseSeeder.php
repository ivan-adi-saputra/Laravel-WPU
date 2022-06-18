<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ivan Adi Saputra',
            'username' => 'ivanadisaputra', 
            'email' => 'ivanadisaputra34@gmail.com', 
            'password' => bcrypt('password')
        ]);
        
        User::factory(5)->create();
        Post::factory(20)->create();
        // User::create([
        //     'name' => 'Sandhika Galih', 
        //     'email' => 'sandhikagalih@gmail.com', 
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming', 
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design', 
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal', 
            'slug' => 'personal'
        ]);

    //     Post::create([
    //         'title' => 'Judul Pertama', 
    //         'slug' => 'judul-pertama', 
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio repudiandae eaque hic voluptas modi? Doloremque recusandae nulla animi', 
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio repudiandae eaque hic voluptas modi? Doloremque recusandae nulla animi laudantium cum molestiae illo sapiente consectetur, deserunt at esse nisi, dolor blanditiis ad possimus numquam. Natus, numquam, repellat rerum veniam suscipit debitis commodi temporibus quasi minima illum sequi deserunt quia quam laudantium. Id maiores mollitia error rerum quasi voluptates, officiis, impedit consequatur sapiente sequi nulla, perspiciatis modi tempora ducimus praesentium hic veniam soluta voluptate cumque odit fugiat provident exercitationem? Dicta voluptates et sint ea magni consectetur veniam saepe dolorum repellat quos? Adipisci debitis repudiandae ad quae iste dolore officiis porro voluptatem dolores, rerum reprehenderit quibusdam placeat molestiae dolorum tenetur quis. Ipsum molestias repellendus voluptatem pariatur saepe deserunt accusamus impedit tenetur repellat laudantium.', 
    //         'category_id' => 1, 
    //         'user_id' => 1
    //     ]);
    //     Post::create([
    //         'title' => 'Judul Kedua', 
    //         'slug' => 'judul-kedua', 
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio repudiandae eaque hic voluptas modi? Doloremque recusandae nulla animi', 
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio repudiandae eaque hic voluptas modi? Doloremque recusandae nulla animi laudantium cum molestiae illo sapiente consectetur, deserunt at esse nisi, dolor blanditiis ad possimus numquam. Natus, numquam, repellat rerum veniam suscipit debitis commodi temporibus quasi minima illum sequi deserunt quia quam laudantium. Id maiores mollitia error rerum quasi voluptates, officiis, impedit consequatur sapiente sequi nulla, perspiciatis modi tempora ducimus praesentium hic veniam soluta voluptate cumque odit fugiat provident exercitationem? Dicta voluptates et sint ea magni consectetur veniam saepe dolorum repellat quos? Adipisci debitis repudiandae ad quae iste dolore officiis porro voluptatem dolores, rerum reprehenderit quibusdam placeat molestiae dolorum tenetur quis. Ipsum molestias repellendus voluptatem pariatur saepe deserunt accusamus impedit tenetur repellat laudantium.', 
    //         'category_id' => 1, 
    //         'user_id' => 1
    //     ]);
    //     Post::create([
    //         'title' => 'Judul ketiga', 
    //         'slug' => 'judul-ketiga', 
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio repudiandae eaque hic voluptas modi? Doloremque recusandae nulla animi', 
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio repudiandae eaque hic voluptas modi? Doloremque recusandae nulla animi laudantium cum molestiae illo sapiente consectetur, deserunt at esse nisi, dolor blanditiis ad possimus numquam. Natus, numquam, repellat rerum veniam suscipit debitis commodi temporibus quasi minima illum sequi deserunt quia quam laudantium. Id maiores mollitia error rerum quasi voluptates, officiis, impedit consequatur sapiente sequi nulla, perspiciatis modi tempora ducimus praesentium hic veniam soluta voluptate cumque odit fugiat provident exercitationem? Dicta voluptates et sint ea magni consectetur veniam saepe dolorum repellat quos? Adipisci debitis repudiandae ad quae iste dolore officiis porro voluptatem dolores, rerum reprehenderit quibusdam placeat molestiae dolorum tenetur quis. Ipsum molestias repellendus voluptatem pariatur saepe deserunt accusamus impedit tenetur repellat laudantium.', 
    //         'category_id' => 2, 
    //         'user_id' => 2
    //     ]);
    //     Post::create([
    //         'title' => 'Judul keempat', 
    //         'slug' => 'judul-keempat', 
    //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio repudiandae eaque hic voluptas modi? Doloremque recusandae nulla animi', 
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio repudiandae eaque hic voluptas modi? Doloremque recusandae nulla animi laudantium cum molestiae illo sapiente consectetur, deserunt at esse nisi, dolor blanditiis ad possimus numquam. Natus, numquam, repellat rerum veniam suscipit debitis commodi temporibus quasi minima illum sequi deserunt quia quam laudantium. Id maiores mollitia error rerum quasi voluptates, officiis, impedit consequatur sapiente sequi nulla, perspiciatis modi tempora ducimus praesentium hic veniam soluta voluptate cumque odit fugiat provident exercitationem? Dicta voluptates et sint ea magni consectetur veniam saepe dolorum repellat quos? Adipisci debitis repudiandae ad quae iste dolore officiis porro voluptatem dolores, rerum reprehenderit quibusdam placeat molestiae dolorum tenetur quis. Ipsum molestias repellendus voluptatem pariatur saepe deserunt accusamus impedit tenetur repellat laudantium.', 
    //         'category_id' => 2, 
    //         'user_id' => 2
    //     ]);
    }
}
