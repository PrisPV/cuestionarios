<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Asignatura;

class Asignatura_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignatura_user')->insert([
            'user_id'=>'5',
            'asignatura_id'=>'1',
        ]);
        DB::table('asignatura_user')->insert([
            'user_id'=>'5',
            'asignatura_id'=>'4',
        ]);
        DB::table('asignatura_user')->insert([
            'user_id'=>'9',
            'asignatura_id'=>'5',
        ]);
        DB::table('asignatura_user')->insert([
            'user_id'=>'14',
            'asignatura_id'=>'2',
        ]);
        DB::table('asignatura_user')->insert([
            'user_id'=>'14',
            'asignatura_id'=>'10',
        ]);
        DB::table('asignatura_user')->insert([
            'user_id'=>'16',
            'asignatura_id'=>'3',
        ]);
        DB::table('asignatura_user')->insert([
            'user_id'=>'16',
            'asignatura_id'=>'6',
        ]);
        DB::table('asignatura_user')->insert([
            'user_id'=>'18',
            'asignatura_id'=>'7',
        ]);
        DB::table('asignatura_user')->insert([
            'user_id'=>'20',
            'asignatura_id'=>'8',
        ]);
    }
}

