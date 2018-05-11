<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

        $series =[
            [
                'title' => 'House of Cards',
                'profile' => 'Ataca o problema com método e faz de tudo para resolver a situação.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'Game of Thrones',
                'profile' => 'Não tem muita delicadeza nas ações, mas resolve o problema de forma prática.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'Lost',
                'profile' => 'Faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'Braking Bad',
                'profile' => 'Pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'Silicon Valley',
                'profile' => 'Vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia.',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ];

        DB::table('series')->insert($series);
    }
}
