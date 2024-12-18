<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $food = db::table('categories')->where('name', 'Food')->first();

        db::table('Product_tabel')->insert([
            [
                'name'=>'Lasagna',
                'description'=>'Lasagna, traditional Italian pasta. Portion of ground beef lasagna topped with melted cheese ',
                'price'=>'27000',
                'categories_id'=>$food->id,
            ]
        ]);
    }
}
