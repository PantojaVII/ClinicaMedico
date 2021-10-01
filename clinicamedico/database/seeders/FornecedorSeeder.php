<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(table:'fornecedores')->insert([
            "nome" => Str::random(length:10),
            "cnpj" => Str::random(length:11),
            "endereco" => Str::random(length:40),
        ]);
    }
}
