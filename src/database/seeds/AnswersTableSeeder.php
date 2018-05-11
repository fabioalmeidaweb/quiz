<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

        $answers =[
            [
                'series_id' => 1,
                'question_id' => 1,
                'answer' => 'Acorda cedo e come frutas cortadas metodicamente.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 2,
                'question_id' => 1,
                'answer' => 'Sai da cama com o despertador e se prepara para a batalha da semana.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 3,
                'question_id' => 1,
                'answer' => 'Só consegue lembrar do seu nome depois do café.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 4,
                'question_id' => 1,
                'answer' => 'Levanta e faz café pra todos da casa.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 5,
                'question_id' => 1,
                'answer' => 'Passa o café e conserta um erro no HTML.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 1,
                'question_id' => 2,
                'answer' => 'Ela vai atrapalhar seu horário. Oculte o corpo.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 2,
                'question_id' => 2,
                'answer' => 'Levanta a senhora e jura protegê-la com sua vida.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 3,
                'question_id' => 2,
                'answer' => 'Ajuda-a, mas questiona sua real identidade.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 4,
                'question_id' => 2,
                'answer' => 'Oferece para caminharem juntos até um destino em comum.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 5,
                'question_id' => 2,
                'answer' => 'Testa se ela roda bem no Firefox. Não roda.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 1,
                'question_id' => 3,
                'answer' => 'Convence parte das pessoas a esperarem o próximo.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 2,
                'question_id' => 3,
                'answer' => 'Ignora as pessoas no elevador e entra de qualquer forma.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 3,
                'question_id' => 3,
                'answer' => 'Você questiona a realidade, as coisas e tudo mais. Sobe de escada.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 4,
                'question_id' => 3,
                'answer' => 'Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 5,
                'question_id' => 3,
                'answer' => 'Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 1,
                'question_id' => 4,
                'answer' => 'Fala sobre a política, eleições, como tudo é um absurdo.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 2,
                'question_id' => 4,
                'answer' => 'Larga uma frase polêmica e vê uma pequena guerra se formar.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 3,
                'question_id' => 4,
                'answer' => 'Puxa um assunto e te lembram que já foi discutido semana passada.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 4,
                'question_id' => 4,
                'answer' => 'Sugere que os colegas trabalhem na ideia de um novo projeto.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 5,
                'question_id' => 4,
                'answer' => 'Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 1,
                'question_id' => 5,
                'answer' => 'Vou chamar aqui o meu Uber.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 2,
                'question_id' => 5,
                'answer' => 'Pegarei o bus junto com o resto do povo.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 3,
                'question_id' => 5,
                'answer' => 'No ponto de ônibus mais uma vez, espero não errar a linha de novo.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 4,
                'question_id' => 5,
                'answer' => 'Vou de carro, mas ofereço uma carona para os colegas.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'series_id' => 5,
                'question_id' => 5,
                'answer' => 'Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        DB::table('answers')->insert($answers);
    }
}


