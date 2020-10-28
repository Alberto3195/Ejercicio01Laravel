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
        App\modelos::truncate();
        DB::unprepared(file_get_contents('dabatabase/modelos.sql'));
        //falta por crear el sql de los modelos
    }
}
