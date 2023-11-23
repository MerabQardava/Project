<a href="{{ route('quiz.edit') }}">Add New Quiz</a>
<ul>
    @foreach($quizzes as $quiz)
        <li>
            <div>
            {{ $quiz->name }}
            <br>
            {{ $quiz->description }}
            <br>
            <img src="{{ asset($quiz['photo']) }}" alt="{{ $quiz['name'] }}" class="card-img-top">
            <br>
            <a href="{{ route('quiz.edit', $quiz->id) }}">Edit</a>
            <hr>
            <br>
</div>
        </li>
    @endforeach
</ul>