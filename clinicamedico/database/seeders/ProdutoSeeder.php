<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(table:'produtos')->insert([
            "nome" => Str::random(length:10),
            "descricao" => Str::random(length:11),
 
        ]);
    }
}
