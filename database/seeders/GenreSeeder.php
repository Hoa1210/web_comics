<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'Tình cảm',
            'slug' => 'tinh-cam',
            'is_public' => 1,
            'description' => 'Truyện tranh về tình yêu, tình bạn và tình cảm giữa các nhân vật.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('genres')->insert([
            'name' => 'Hài hước',
            'slug' => 'hai-huoc',
            'is_public' => 1,
            'description' => 'Truyện tranh vui nhộn và hài hước.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('genres')->insert([
            'name' => 'Kiếm hiệp',
            'slug' => 'kiem-hiep',
            'is_public' => 1,
            'description' => 'Truyện tranh về những cuộc chiến giữa các vị anh hùng và kẻ thù.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('genres')->insert([
            'name' => 'Siêu nhiên',
            'slug' => 'sieu-nhien',
            'is_public' => 1,
            'description' => 'Truyện tranh về những nhân vật có siêu năng lực.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('genres')->insert([
            'name' => 'Học đường',
            'slug' => 'hoc-duong',
            'is_public' => 1,
            'description' => 'Truyện tranh về sinh hoạt và học tập của học sinh trung học.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('genres')->insert([
            'name' => 'Kinh dị',
            'slug' => 'kinh-di',
            'is_public' => 1,
            'description' => 'Truyện tranh kinh dị về ma ám và bóng tối.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('genres')->insert([
            'name' => 'Thần thoại',
            'slug' => 'than-thoai',
            'is_public' => 1,
            'description' => 'Truyện tranh về các vị thần, quỷ và các siêu năng lực thần thánh.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('genres')->insert([
            'name' => 'Cổ đại',
            'slug' => 'co-dai',
            'is_public' => 1,
            'description' => 'Truyện tranh về lịch sử và cuộc chiến trong thế kỷ cổ đại.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('genres')->insert([
            'name' => 'Tâm lý - tâm linh',
            'slug' => 'tam-ly---tam-linh',
            'is_public' => 1,
            'description' => 'Truyện tranh về cuộc sống và tâm trạng của con người.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('genres')->insert([
            'name' => 'Giả tưởng',
            'slug' => 'gia-tuong',
            'is_public' => 1,
            'description' => 'Truyện tranh về thế giới giả tưởng hoặc về tương lai.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
