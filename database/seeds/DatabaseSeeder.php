<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\modelos::truncate(); //Indicamos la tabla a la que deseamos acceder
        DB::unprepared(file_get_contents('dabatabase/audi.sql')); //llamamos a nuestra base de datos
        //SqL creado
    }
}
