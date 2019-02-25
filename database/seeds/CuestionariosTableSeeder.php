<?php

use Illuminate\Database\Seeder;

class CuestionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cuestionarios')->insert([
            'descripcion'=>'Autoevaluación 1',
            'intentos'=>'3',
            'fecha_limite'=>'2019-03-22 23:55:00',
            'hora_limite'=>'23:55:00',
            'estado'=>'1',
            'user_id'=>'14',
            'asignatura_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
