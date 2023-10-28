<a href="{{ route('quiz.edit') }}">Add New Quiz</a>
<ul>
    @foreach($quizzes as $quiz)
        <li>
            {{ $quiz->name }}
            <a href="{{ route('quiz.edit', $quiz->id) }}">Edit</a>
        </li>
    @endforeach
</ul>