<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calles;

class CallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calles = [
            ['Barrio Italia', 1],
            ['Arturo Prat', 1],
            ['Esmeralda', 1],
            ['Manuel Rodríguez ', 2],
            ['Gabriela Mistral', 3],
            ['Los Aromos', 4],
            ['Las Rosas', 5],
            ['Caupolicán', 6],
            ['Lautaro', 7],
            ['Los Copihues', 7],
            ['Los Alerces', 7],
            ['Paícavi', 8],
            ['Comercio', 9],
            ['Brasil', 10],
            ['Argentina', 11],
            ['Heras', 11],
            ['Colombia', 11],
            ['Los 33', 12],
            ['Vilumilla', 13],
            ['Salas', 14],
            ['Camino Parronal', 15],
            ['Diagonal Oriente', 16],
        ];
        $now = now();
        $insert_calles = array_map(
            function ($calle) use ($now) {
                return [
                    'calle_nombre' => $calle[0],
                    'ciudad_id' => $calle[1],
                    'updated_at' => $now,
                    'created_at' => $now,
                ];
            },
            $calles
        );

        Calles::insert($insert_calles);
    }
}
