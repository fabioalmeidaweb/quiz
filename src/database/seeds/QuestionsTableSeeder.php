<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

        $questions =[
            [
                'question' => 'De manhã, você:',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'question' => 'Indo para o trabalho você encontra uma senhora idosa caída na rua:',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'question' => 'Chega no prédio e o elevador está cheio:',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'question' => 'Você chega no trabalho e as convenções sociais te obrigam a puxar assunto:',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'question' => 'A pauta pegou o dia todo, mas você está indo para casa:',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ];

        DB::table('questions')->insert($questions);
    }
}
