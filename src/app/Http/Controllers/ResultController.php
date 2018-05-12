<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Series;
use Illuminate\Http\Request;

class ResultController extends Controller
{

    public function index(Request $request, Question $question, Answer $answer, Series $series)
    {
        $answersId = $this->getAnswers($request, $question);
        $answers = $answer->find($answersId);

        $winnerSeriesId = $this->getWinnerSeriesId($answers);

        $winner = $series->findOrFail($winnerSeriesId);

        return view('result', ['winner' => $winner]);
    }

    private function getAnswers(Request $request, Question $question): array
    {
        $questions = $question->all();
        $session = $request->session();
        $result = [];

        foreach ($questions AS $question) {
            $result[] = $session->get("answer_question_{$question->id}");
        }

        return $result;
    }

    private function getWinnerSeriesId($answers)
    {
        $winner = 0;

        $answersMap = [];
        foreach ($answers as $answer) {
            $answersMap[$answer->series_id][] = $answer->weight;
        }

        $biggest = 0;
        $heaviest = 0;

        foreach ($answersMap as $key => $value) {
            $numberOfAnswers = count($value);

            if ($numberOfAnswers > $biggest) {
                $winner = $key;
                $biggest = $numberOfAnswers;
                $heaviest = 0;
            } else
            if ($numberOfAnswers === $biggest) {
                $weight = array_sum($value);
                if ($weight > $heaviest) {
                    $winner = $key;
                    $heaviest = $weight;
                }
            }

        }

        return $winner;
    }

}
