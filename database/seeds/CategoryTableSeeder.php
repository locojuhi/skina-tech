<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Categoria independiente",
            'status_id' => 1,
            'parent_id' => 1,
            'created_at' => '2018-01-28 16:18:52',
            'updated_at'=> '2018-01-28 16:18:52'

        ]);
    }
}
