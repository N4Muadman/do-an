<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Movie;
use Carbon\Carbon;
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Faker = Faker::create();
        $fixedDate = Carbon::create(2023,10,20);
        for($i = 1; $i<30 ; $i++){
            Movie::create([
                'Id' => $i,
                'Ten' => $Faker->sentence(3, true),
                'ThoiLuongChieu' => '120 Phút',
                'img' => $Faker->imageUrl(400,400,'movie', true),
                'Ngaykhoichieu' => $fixedDate,
                'Theloai' => $Faker->sentence(1, true),
                'Quocgia' => $Faker->sentence(1, true),
                'DaoDien' => $Faker->sentence(1, true),
                'DienVien' => $Faker->sentence(1, true),
                'NoiDung' => $Faker->paragraph(1, true)
            ]);
        }
    }
}
