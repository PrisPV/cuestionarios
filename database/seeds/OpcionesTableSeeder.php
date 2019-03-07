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

        /* Pregunta 2 */
        DB::table('opciones')->insert([
            'opcion'=>'Camiseta, parásito, caravana.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Príncipe, cuesta, transito.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Parlamento, cubículo, pararrayo.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'2',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        
        /**Pregunta 3 */
        DB::table('opciones')->insert([
            'opcion'=>'Intran-sig-en-te, coa-cci-ón, pleit-es-ía.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'3',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'In-tran-si-gen-te, co-ac-ción, plei-te-sí-a.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'3',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'In-trans-igen-te, coac-ción, pleit-e-sía.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'3',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 4 */
        DB::table('opciones')->insert([
            'opcion'=>'Tránsito, inflexible, acción.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'4',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Pichincha, allá, arroz.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'4',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Ilíada, alharaca, deshumanizar.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'4',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 5 */
        DB::table('opciones')->insert([
            'opcion'=>'Calabaza, cabecera, mayonesa.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'5',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Causa, trenza, cruces.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'5',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Andrea, Corea, cámara.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'5',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 6 */
        DB::table('opciones')->insert([
            'opcion'=>'Este es el cocinero con quien hablamos en la habitación tres.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'6',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Es el camarada del coronel Márquez Buendía.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'6',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Cada amanecer me llegan tus recuerdos.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'6',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 7 */
        DB::table('opciones')->insert([
            'opcion'=>'Cuestiones, tiempo, maicena, suerte.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'7',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Bahía, coordinar, maestría, joyería.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'7',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Paúl, Maíz, raíz, maletería, joyería.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'7',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 8 */
        DB::table('opciones')->insert([
            'opcion'=>'Ese es el peine de la reina Margarita.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'8',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'No averigüéis por su nombre.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'8',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Os actuáis conforme lo hicisteis en Paraguay.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'8',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 9 */
        DB::table('opciones')->insert([
            'opcion'=>'Diptongo.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'9',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Hiato.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'9',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Triptongo.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'9',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        /** Pregunta 10 */
        DB::table('opciones')->insert([
            'opcion'=>'Los menores dijeron: "Si no confiáis en nosotros, nada podemos hacer".',
            'resp_correcta'=>'0',
            'pregunta_id'=>'10',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Traiga los emblemas de nuestra patria, porque los necesito.',
            'resp_correcta'=>'0',
            'pregunta_id'=>'10',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('opciones')->insert([
            'opcion'=>'Diana confió en la palabra de Raúl, por eso entregó el informe.',
            'resp_correcta'=>'1',
            'pregunta_id'=>'10',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
