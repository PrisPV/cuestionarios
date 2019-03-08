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
    {   /** Cuestionario Expresiòn Oral : 1. Autoevaluación 1 */
        DB::table('preguntas')->insert([
            'pregunta'=>'El literal donde se encuentran palabras con sílabas de dos letras es:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'El literal donde se encuentran palabras con sílabas de cuatro letras es:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Las palabras que se encuentran divididas en sílabas de forma correcta son:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'En cuál de los siguientes literales se encuentran las consonantes dobles que constituyen un solo fonema:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'El literal en el que se encuentran palabras trisílabas es:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'La oración en la que se encuentran dos palabras tetrasílabas es:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'El literal donde se encuentran palabras con diptongo es:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Identifique el literal donde se encuentran dos palabras con diptongo:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Cooperativa, prohíbase, bahía y continúa, son ejemplos de:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Si hiato es la separación de dos vocales contiguas en la pronunciación, la oración donde se encuentra el hiato es:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Cuestionario Ingenierìa de Requisitos : 2. Cuestionario Unidad 1 */
        DB::table('preguntas')->insert([
            'pregunta'=>'La Ingeniería de Requisitos, es importante por:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Son declaraciones en lenguaje natural y en diagramas de los servicios que se espera que el sistema provea y de las restricciones bajo las cuales debe operar:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Los requerimientos funcionales describen:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Los requerimientos de usuario:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Los requerimientos no funcionales se los puede clasificar en:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'La característica de factibilidad en un requisito individual se refiere a:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Un requisito individual es concreto cuando se refiere a:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Un requisito tiene la característica de consistente cuando:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Un requisito es trazable cuando:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('preguntas')->insert([
            'pregunta'=>'Los requisitos deben ser validados:',
            'tipo'=>'seleccion_unica',
            'cuestionario_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
