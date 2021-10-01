<?php

namespace Database\Seeders;

 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\In;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(table:'cliente')->insert([
            "nome" => Str::random(length:10),
            "cpf" => Str::random(length:11),
            "endereco" => Str::random(length:40),
        ]);
    }
}
