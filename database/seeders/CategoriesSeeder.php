<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('categories')->insert([
            [
                'name' => 'Electronic',
            ],
            [
                'name' => 'Food',
            ],
            [
                'name' => 'Beauty',
            ],
        ]);
    }
}
