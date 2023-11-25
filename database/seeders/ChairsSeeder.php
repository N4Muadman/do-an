<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chairs;

class ChairsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i<93; $i++){
            if ($i >=0 && $i <= 22) {
                $ten = $i+1;
                $hang = 'A';
                $idFor = 'c'.($i+1);
                if ($i == 19) {
                    $class ='st_eco_second_row';
                }else $class = '';

            } elseif ($i >= 23 && $i <= 45) {
                $ten = $i-22;
                $hang = 'B';
                $idFor = 'c'.($i+1);
                if ($i-23 == 19) {
                    $class ='st_eco_second_row';
                }else $class = '';
            } elseif ($i >= 46 && $i <= 68) {
                $ten = $i-45;
                $hang = 'C';
                $idFor = 'c'.($i+1);
                if ($i-46 == 19) {
                    $class ='st_eco_second_row';
                }else $class = '';
            } elseif ($i >= 69 && $i < 93) {
                $ten = $i-68;
                $hang = 'D';
                $idFor = 'c'.($i+1);
                if ($i-69 == 19) {
                    $class ='st_eco_second_row';
                }else $class = '';
            }
            Chairs::create([
                'PhongId' => 8,
                'Ten' => $ten,
                'Hang' => $hang,
                'idFor' => $idFor,
                'class' => $class,
            ]);
        }
    }
}
