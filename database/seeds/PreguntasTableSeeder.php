<?php

use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert([
            'pregunta'=>'El procesador:',
            'tipo'=>'seleccion_multiple',
            'cuestionario_id'=>'3',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
