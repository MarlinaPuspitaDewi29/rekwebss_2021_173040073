<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Marlina Puspita Dewi',
            'email' => 'marlina_173040073@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Arlina Puspita',
            'email' => 'arlina@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus ipsa dignissimos quae qui dolor, delectus dolores! Repellat nisi illum ea! Laboriosam, ex quo tempore quam fuga eveniet tenetur ducimus autem blanditiis maxime placeat magni, ipsum reiciendis alias vitae omnis nisi dolores facilis. Deleniti dolorem iusto voluptates maiores? Repudiandae illo sed rerum odio eaque, iste minima similique esse aliquam, ea fuga dolores facilis delectus explicabo totam hic beatae perferendis quis cum dolor incidunt voluptatibus exercitationem ipsa. Excepturi rem repellat qui eaque. Optio, neque ipsum! Laboriosam maxime quo temporibus porro quae, libero rerum sequi ex adipisci beatae? Aut tenetur quam numquam aperiam.',
            'category_id' =>  1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus ipsa dignissimos quae qui dolor, delectus dolores! Repellat nisi illum ea! Laboriosam, ex quo tempore quam fuga eveniet tenetur ducimus autem blanditiis maxime placeat magni, ipsum reiciendis alias vitae omnis nisi dolores facilis. Deleniti dolorem iusto voluptates maiores? Repudiandae illo sed rerum odio eaque, iste minima similique esse aliquam, ea fuga dolores facilis delectus explicabo totam hic beatae perferendis quis cum dolor incidunt voluptatibus exercitationem ipsa. Excepturi rem repellat qui eaque. Optio, neque ipsum! Laboriosam maxime quo temporibus porro quae, libero rerum sequi ex adipisci beatae? Aut tenetur quam numquam aperiam.',
            'category_id' =>  1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus ipsa dignissimos quae qui dolor, delectus dolores! Repellat nisi illum ea! Laboriosam, ex quo tempore quam fuga eveniet tenetur ducimus autem blanditiis maxime placeat magni, ipsum reiciendis alias vitae omnis nisi dolores facilis. Deleniti dolorem iusto voluptates maiores? Repudiandae illo sed rerum odio eaque, iste minima similique esse aliquam, ea fuga dolores facilis delectus explicabo totam hic beatae perferendis quis cum dolor incidunt voluptatibus exercitationem ipsa. Excepturi rem repellat qui eaque. Optio, neque ipsum! Laboriosam maxime quo temporibus porro quae, libero rerum sequi ex adipisci beatae? Aut tenetur quam numquam aperiam.',
            'category_id' =>  2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus ipsa dignissimos quae qui dolor, delectus dolores! Repellat nisi illum ea! Laboriosam, ex quo tempore quam fuga eveniet tenetur ducimus autem blanditiis maxime placeat magni, ipsum reiciendis alias vitae omnis nisi dolores facilis. Deleniti dolorem iusto voluptates maiores? Repudiandae illo sed rerum odio eaque, iste minima similique esse aliquam, ea fuga dolores facilis delectus explicabo totam hic beatae perferendis quis cum dolor incidunt voluptatibus exercitationem ipsa. Excepturi rem repellat qui eaque. Optio, neque ipsum! Laboriosam maxime quo temporibus porro quae, libero rerum sequi ex adipisci beatae? Aut tenetur quam numquam aperiam.',
            'category_id' =>  2,
            'user_id' => 2
        ]);
    }
}