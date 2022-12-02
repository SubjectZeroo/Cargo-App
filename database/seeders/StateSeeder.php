<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->delete();
        $states = array(
            array('name' => "Amazonas"),
            array('name' => "Anzoategui"),
            array('name' => "Apure"),
            array('name' => "Aragua"),
            array('name' => "Barinas"),
            array('name' => "Bolivar"),
            array('name' => "Carabobo"),
            array('name' => "Cojedes"),
            array('name' => "Delta Amacuro"),
            array('name' => "Distrito Federal"),
            array('name' => "Falcon"),
            array('name' => "Guarico"),
            array('name' => "Lara"),
            array('name' => "Merida"),
            array('name' => "Miranda"),
            array('name' => "Monagas"),
            array('name' => "Nueva Esparta"),
            array('name' => "Portuguesa"),
            array('name' => "Sucre"),
            array('name' => "Tachira"),
            array('name' => "Trujillo"),
            array('name' => "Vargas"),
            array('name' => "Yaracuy"),
            array('name' => "Zulia"),
        );
        \DB::table('states')->insert($states);
    }
}
