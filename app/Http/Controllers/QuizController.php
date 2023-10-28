<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {

        $quizzes = Quiz::all();


        return view('home', ['quizzes' => $quizzes]);
    }

    public function edit($id = null)
    {
        $quiz = ($id) ? Quiz::find($id) : new Quiz;
        return view('edit', compact('quiz'));
    }

    public function store(Request $request, $id = null)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $quiz = ($id) ? Quiz::find($id) : new Quiz;
        $quiz->fill($data);
        $quiz->save();

        return redirect('/quizzes')->with('success', 'Quiz saved successfully!');
    }
}
