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
    {   /*Cuestionario 1 - Expresion Oral - Pregunta 1 */
        DB::table('opciones')->insert([
            'opcion'=>'Trenes, cintas, prados.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Casaca, morado, locura.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Trillar, cuadros, puedes.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
