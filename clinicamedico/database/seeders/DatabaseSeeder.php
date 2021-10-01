<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(class: ClienteSeeder ::class);
       $this->call(class: FornecedorSeeder ::class);
       $this->call(class: ProdutoSeeder ::class);
    }
}
