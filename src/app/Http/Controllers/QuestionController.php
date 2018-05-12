<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    protected $question;
    protected $answer;
    protected $request;

    public function __construct(Question $question, Answer $answer, Request $request)
    {
        $this->question = $question;
        $this->answer = $answer;
        $this->request = $request;
    }

    public function show()
    {
        $id = $this->request->session()->get('current_question', 1);
        $question = $this->question->with('answers')->find($id);

        if (!$question) {
            return redirect(route('result'));
        }

        return view('question.show', ['question' => $question]);

    }

    public function save()
    {
        $answerId = $this->request->answer;
        $questionId = $this->request->session()->pull('current_question', 1);
        $this->request->session()->put("answer_question_{$questionId}", $answerId);

        $nextQuestion = $this->question->where('id', '>', $questionId)->first();
        $this->request->session()->put('current_question', $nextQuestion->id ?? null);

        return redirect(route('question.show'));
    }

}
