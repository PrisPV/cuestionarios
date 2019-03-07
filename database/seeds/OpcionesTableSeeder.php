<?php

use Illuminate\Database\Seeder;

class OpcionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opciones')->insert([
            'opcion'=>'Controla y sincroniza todo el proceso de la computadora.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Controla y sincroniza todo el proceso de la computadora.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
