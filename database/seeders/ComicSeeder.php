<?php

namespace Database\Seeders;

use App\Models\Comics;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
            'name' => 'Chainsaw Man',
            'slug' => 'chainsaw-man',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-01.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 1,
            'comic_id' => 1,
        ]);
        DB::table('comics')->insert([
            'name' => 'Onepiece',
            'slug' => 'onepiece',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-02.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 2,
            'comic_id' => 2,
        ]);
        DB::table('comics')->insert([
            'name' => 'Tokyo',
            'slug' => 'tokyo',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-03.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 3,
            'comic_id' => 3,
        ]);
        DB::table('comics')->insert([
            'name' => 'Boruto',
            'slug' => 'boruto',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-04.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 4,
            'comic_id' => 4,
        ]);
        DB::table('comics')->insert([
            'name' => 'Mairimashita! Iruma-kun 3rd season',
            'slug' => 'mairimashita!-iruma-kun-3rd-season',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-05.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 5,
            'comic_id' => 5,
        ]);
        DB::table('comics')->insert([
            'name' => 'Yuusha Party O Tsuihou Sareta Beast',
            'slug' => 'yuusha-party-o-tsuihou-sareta-beast',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-06.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 6,
            'comic_id' => 6,
        ]);
        DB::table('comics')->insert([
            'name' => 'BLEACH: Thousand-Year Blood War',
            'slug' => 'bleach-thousand-year-blood-war',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-07.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 7,
            'comic_id' => 7,
        ]);
        DB::table('comics')->insert([
            'name' => 'Raven of the Inner Palace',
            'slug' => 'raven-of-the-inner-palace',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-08.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 8,
            'comic_id' => 8,
        ]);
        DB::table('comics')->insert([
            'name' => "Don't Toy With Me, Miss Nagatoro",
            'slug' => 'dont-toy-with-me-miss-nagatoro',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-18.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 9,
            'comic_id' => 9,
        ]);
        DB::table('comics')->insert([
            'name' => "Inu ni Nattara Suki na Hito ni Hirowareta",
            'slug' => 'inu-ni-nattara-suki-na-hito-ni-hirowareta',
            'author' => "Đang cập nhật",
            'img_path' =>'public/images/comics/product-21.jpg',
            'is_public' => 1,
            'release_date' => now(),
            'description' => NULL,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
        DB::table('comic_genre')->insert([
            'genre_id' => 10,
            'comic_id' => 10,
        ]);

    }

}
