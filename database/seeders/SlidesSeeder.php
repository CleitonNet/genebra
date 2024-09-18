<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slides')->insert([
            'image' => 'img/carousel/foto1.jpg',
            'title1' => 'CRISTÃ POR VOCAÇÃO',
            'title2' => 'SUÍÇA POR EXCELÊNCIA',
            'btnlabel1' => 'Ação 1',
            'btnaction1' => null,
            'btnlabel2' => 'Ação 2',
            'btnaction2' => null,
            'alignment' => 'left'
        ]);
        DB::table('slides')->insert([
            'image' => 'img/carousel/foto2.jpg',
            'title1' => 'INTERNATIONAL',
            'title2' => 'BACCALAUREATE',
            'btnlabel1' => 'Ação 1',
            'btnaction1' => null,
            'btnlabel2' => 'Ação 2',
            'btnaction2' => null,
            'alignment' => 'left'
        ]);
        DB::table('slides')->insert([
            'image' => 'img/carousel/foto3.jpg',
            'title1' => 'MATRÍCULAS',
            'title2' => 'ABERTAS',
            'btnlabel1' => 'Ação 1',
            'btnaction1' => null,
            'btnlabel2' => 'Ação 2',
            'btnaction2' => null,
            'alignment' => 'left'
        ]);
        DB::table('slides')->insert([
            'image' => 'img/carousel/foto4.jpg',
            'title1' => 'CRISTÃ POR VOCAÇÃO.',
            'title2' => 'SUÍÇA POR EXCELÊNCIA.',
            'btnlabel1' => 'Ação 1',
            'btnaction1' => null,
            'btnlabel2' => 'Ação 2',
            'btnaction2' => null,
            'alignment' => 'left'
        ]);
    }
}
