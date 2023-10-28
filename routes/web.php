<?php
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quizzes', [QuizController::class, 'index']);
Route::get('/quiz/{id?}', [QuizController::class, 'edit'])->name('quiz.edit');
Route::post('/quiz/{id?}', [QuizController::class, 'store']);