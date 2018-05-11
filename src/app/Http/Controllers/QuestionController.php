<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    protected $question;
    protected $answer;


    /**
     * QuestionController constructor.
     * @param Question $question
     * @param Answer $answer
     */
    public function __construct(Question $question, Answer $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentQuestion = $this->question->findOrFail($id);

        return view('question.show', ['question' => $currentQuestion]);
    }

}
