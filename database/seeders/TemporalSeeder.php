<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemporalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*DB::table('escuela')->insert([
            'nombre'=>'Ciencias Y Sistemas'
        ]
        );*/


        //echo($escuela);
        //dd($escuela);
        //DB::statement('drop table users');

        DB::insert('insert into escuela (nombre) values (?)', ['Mecanica']);

        $escuela = db::select('select * from escuela');
        //echo($escuela);
        DB::update('update escuela set nombre = ? where nombre = ?', ['Mecánica','Mecanica']);
        //echo($escuela);



        $escuela = DB::select('select * from escuela where idescuela = ?', [1]);

        //dd($escuela[0]->idescuela);
        DB::insert('insert into area (escuela, nombre) values (?, ?)', [$escuela[0]->idescuela, 'Desarrollo']);
    }
}
