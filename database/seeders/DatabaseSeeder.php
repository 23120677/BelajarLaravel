<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Husein Alfarizi',
        //     'email' => 'huseialfa.17@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Uwais Alkorni',
        //     'email' => 'uwais.23@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => "Judul Post Pertama",
        //     'slug' => "judul-pertama",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quos nostrum veritatis qui error quidem quis voluptas assumenda! Maxime, quo! At, natus incidunt dicta nesciunt tempora consequatur saepe, sint officiis odio eaque voluptatum quia ut a sit repellat! Sit deleniti maiores doloribus autem repellat accusantium adipisci laboriosam nulla odit. Qui facilis voluptas dignissimos fugiat, a non eveniet enim natus incidunt ullam modi! Officiis quibusdam blanditiis ullam laborum fugit, dicta, ratione debitis accusantium quas deleniti esse atque ipsa officia suscipit labore consectetur odio animi ducimus aliquam dolorum sed, voluptatibus voluptatum?<p><p> Error inventore molestias accusantium dolores, nihil quos alias rerum quo iusto numquam unde ut excepturi saepe ea quod, corporis, natus nesciunt dolorem aperiam molestiae a totam ipsa reiciendis? Voluptates corporis ullam optio atque totam similique debitis dolor laboriosam reiciendis vero? Eligendi, doloremque nulla nostrum et aperiam dolore molestias possimus asperiores itaque quibusdam veritatis libero hic quos amet! Illo veritatis deleniti voluptatibus!<p></p>",
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => "Judul Post ke Dua",
        //     'slug' => "judul-ke-dua",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quos nostrum veritatis qui error quidem quis voluptas assumenda! Maxime, quo! At, natus incidunt dicta nesciunt tempora consequatur saepe, sint officiis odio eaque voluptatum quia ut a sit repellat! Sit deleniti maiores doloribus autem repellat accusantium adipisci laboriosam nulla odit. Qui facilis voluptas dignissimos fugiat, a non eveniet enim natus incidunt ullam modi! Officiis quibusdam blanditiis ullam laborum fugit, dicta, ratione debitis accusantium quas deleniti esse atque ipsa officia suscipit labore consectetur odio animi ducimus aliquam dolorum sed, voluptatibus voluptatum?<p><p> Error inventore molestias accusantium dolores, nihil quos alias rerum quo iusto numquam unde ut excepturi saepe ea quod, corporis, natus nesciunt dolorem aperiam molestiae a totam ipsa reiciendis? Voluptates corporis ullam optio atque totam similique debitis dolor laboriosam reiciendis vero? Eligendi, doloremque nulla nostrum et aperiam dolore molestias possimus asperiores itaque quibusdam veritatis libero hic quos amet! Illo veritatis deleniti voluptatibus!<p></p>",
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => "Judul Post ke Tiga",
        //     'slug' => "judul-ke-tiga",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quos nostrum veritatis qui error quidem quis voluptas assumenda! Maxime, quo! At, natus incidunt dicta nesciunt tempora consequatur saepe, sint officiis odio eaque voluptatum quia ut a sit repellat! Sit deleniti maiores doloribus autem repellat accusantium adipisci laboriosam nulla odit. Qui facilis voluptas dignissimos fugiat, a non eveniet enim natus incidunt ullam modi! Officiis quibusdam blanditiis ullam laborum fugit, dicta, ratione debitis accusantium quas deleniti esse atque ipsa officia suscipit labore consectetur odio animi ducimus aliquam dolorum sed, voluptatibus voluptatum?<p><p> Error inventore molestias accusantium dolores, nihil quos alias rerum quo iusto numquam unde ut excepturi saepe ea quod, corporis, natus nesciunt dolorem aperiam molestiae a totam ipsa reiciendis? Voluptates corporis ullam optio atque totam similique debitis dolor laboriosam reiciendis vero? Eligendi, doloremque nulla nostrum et aperiam dolore molestias possimus asperiores itaque quibusdam veritatis libero hic quos amet! Illo veritatis deleniti voluptatibus!<p></p>",
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => "Judul Post ke Empat",
        //     'slug' => "judul-ke-empat",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quos nostrum veritatis qui error quidem quis voluptas assumenda! Maxime, quo! At, natus incidunt dicta nesciunt tempora consequatur saepe, sint officiis odio eaque voluptatum quia ut a sit repellat! Sit deleniti maiores doloribus autem repellat accusantium adipisci laboriosam nulla odit. Qui facilis voluptas dignissimos fugiat, a non eveniet enim natus incidunt ullam modi! Officiis quibusdam blanditiis ullam laborum fugit, dicta, ratione debitis accusantium quas deleniti esse atque ipsa officia suscipit labore consectetur odio animi ducimus aliquam dolorum sed, voluptatibus voluptatum?<p><p> Error inventore molestias accusantium dolores, nihil quos alias rerum quo iusto numquam unde ut excepturi saepe ea quod, corporis, natus nesciunt dolorem aperiam molestiae a totam ipsa reiciendis? Voluptates corporis ullam optio atque totam similique debitis dolor laboriosam reiciendis vero? Eligendi, doloremque nulla nostrum et aperiam dolore molestias possimus asperiores itaque quibusdam veritatis libero hic quos amet! Illo veritatis deleniti voluptatibus!<p></p>",
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
